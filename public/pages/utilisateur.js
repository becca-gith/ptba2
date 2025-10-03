jQuery(document).ready(function () {

    // Lancer le modal pour ajouter un utilisateur
    $("#lancerUtilisateur").click(function (event) {
        event.preventDefault();
        lancerUtilisateur();
    });

    // Validation formulaire utilisateur
    $('#form-utilisateur').validate({
        rules: {
            nom_prenom: { required: true, maxlength: 255 },
            login_utilisateur: { required: true, maxlength: 255 },
            telephone: { maxlength: 20 },
            mot_passe: { 
                required: function () { return $('#utilisateur_id').val() === ''; }, 
                minlength: 6 
            },
            mot_passe_confirmation: { 
                required: function () { return $('#utilisateur_id').val() === ''; }, 
                equalTo: "#mot_passe" 
            },
            role: { required: true, digits: true }
        },
        messages: {
            nom_prenom: { required: "Le nom et prénom sont requis.", maxlength: "Maximum 255 caractères." },
            login_utilisateur: { required: "Le login est requis.", maxlength: "Maximum 255 caractères." },
            telephone: { maxlength: "Maximum 20 caractères." },
            mot_passe: { required: "Le mot de passe est obligatoire.", minlength: "Minimum 6 caractères." },
            mot_passe_confirmation: { required: "Veuillez confirmer le mot de passe.", equalTo: "La confirmation du mot de passe ne correspond pas." },
            role: { required: "Le rôle est obligatoire.", digits: "Le rôle doit être un entier." }
        },
        invalidHandler: function (event, validator) {
            let erreurs = validator.errorList.map(e => e.message);
            verifierFormulaire(erreurs);
        },
        errorPlacement: function () { return false; } // masquer messages par défaut
    });

    // Ajouter utilisateur
    $('#btn-ajouter').click(function (event) {
        event.preventDefault();
        if ($('#form-utilisateur').valid()) enregistrerUtilisateur();
    });

    // Modifier utilisateur
    $('#btn-modifier').click(function (event) {
        event.preventDefault();
        if ($('#form-utilisateur').valid()) modifierUtilisateur();
    });

    // Remplir form pour modification
    $(document).on('click', '.modifierUtilisateur', function (event) {
        event.preventDefault();
        const id = $(this).data('id');
        if (!id || isNaN(id) || parseInt(id) <= 0) {
            toastr.error("ID utilisateur invalide !");
            return;
        }

        $.ajax({
            type: 'GET',
            url: "/utilisateurs/modifier/" + parseInt(id),
            success: function (utilisateur) {
                if (!utilisateur || !utilisateur.id) {
                    toastr.error("Utilisateur introuvable !");
                    return;
                }

                $('#utilisateur_id').val(utilisateur.id);
                $('#nom_prenom').val(utilisateur.nom_prenom);
                $('#login_utilisateur').val(utilisateur.login_utilisateur);
                $('#telephone').val(utilisateur.telephone);
                $('#role').val(utilisateur.role);
                $('#mot_passe, #mot_passe_confirmation').val('');

                $('#modalUtilisateurLabel').text("Modifier un utilisateur");
                $('#btn-ajouter').addClass('d-none');
                $('#btn-modifier').removeClass('d-none');
                $('#addUtilisateur').modal('show');
            },
            error: function (xhr) {
                let message = xhr.responseJSON?.message || "Erreur lors de la récupération de l'utilisateur.";
                toastr.error(message);
            }
        });
    });

    // Supprimer utilisateur
    $(document).on('click', '.supprimerUtilisateur', function (event) {
        event.preventDefault();
        const id = $(this).data('id');

        Swal.fire({
            title: "Supprimer cet utilisateur ?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: "Oui, supprimer",
            cancelButtonText: "Annuler"
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'POST',
                    url: "/utilisateurs/delete/" + id,
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    success: function (res) { notifierSuccesEtRecharger(res.message); },
                    error: function (xhr) {
                        let message = xhr.responseJSON?.message || "Erreur lors de la suppression.";
                        toastr.error(message);
                    }
                });
            }
        });
    });

});

// Fonctions auxiliaires
function lancerUtilisateur() {
    clearUtilisateurForm();
    $('#modalUtilisateurLabel').text('Ajouter un utilisateur');
    $('#btn-ajouter').removeClass('d-none');
    $('#btn-modifier').addClass('d-none');
    $('#addUtilisateur').modal('show');
}

function clearUtilisateurForm() {
    $('#form-utilisateur')[0].reset();
    $('#utilisateur_id').val('');
    $('.error-text').text('');
}

function enregistrerUtilisateur() {
    let formData = new FormData(document.getElementById('form-utilisateur'));
    $.ajax({
        type: 'POST',
        url: "/utilisateurs/save",
        data: formData,
        processData: false,
        contentType: false,
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        success: function (res) { notifierSuccesEtRecharger(res.message); },
        error: handleAjaxError
    });
}

function modifierUtilisateur() {
    let id = $('#utilisateur_id').val();
    let formData = new FormData(document.getElementById('form-utilisateur'));
    $.ajax({
        type: 'POST',
        url: "/utilisateurs/update/" + id,
        data: formData,
        processData: false,
        contentType: false,
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        success: function (res) { notifierSuccesEtRecharger(res.message); },
        error: handleAjaxError
    });
}

function handleAjaxError(xhr) {
    if (xhr.status === 422) {
        let errors = xhr.responseJSON.errors;
        let messages = [];
        for (let field in errors) messages = messages.concat(errors[field]);
        verifierFormulaire(messages);
    } else {
        let msg = xhr.responseJSON?.message || "Erreur serveur inconnue.";
        toastr.error(msg);
    }
}

function verifierFormulaire(erreurs) {
    toastr.options = { closeButton: true, progressBar: true, positionClass: "toast-top-right", timeOut: "3000" };
    erreurs.forEach(msg => toastr.error(msg));
}

function notifierSuccesEtRecharger(message = "Traitement effectué avec succès !") {
    toastr.options = { closeButton: true, progressBar: true, positionClass: "toast-top-right", timeOut: "2000", onHidden: function() { location.reload(); } };
    toastr.success(message);
}
