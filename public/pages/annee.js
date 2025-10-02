jQuery(document).ready(function () {


    // Lancer le modal pour ajouter un annee
    $("#lancerAnnee").click(function (event) {
        event.preventDefault();
        lancerAnnee();
    });

    // Validation formulaire annee
    $('#form-annee').validate({
        rules: {
            libelle: {
                required: true,
                maxlength: 255
            }
        },
        messages: {
            libelle: {
                required: "Le libellé de l' annee  est requis.",
                maxlength: "Le libellé ne doit pas dépasser 255 caractères."
            }
        },
        invalidHandler: function (event, validator) {
            let erreurs = validator.errorList.map(e => e.message);
            verifierFormulaire(erreurs);
        },
        errorPlacement: function () { return false; }
    });

    // Ajout annee
    $('#btn-ajouter').click(function (event) {
        event.preventDefault();
        if ($('#form-annee').valid()) {
            enregistrerAnnee();
        }
    });

    // Modifier annee
    $('#btn-modifier').click(function (event) {
        event.preventDefault();
        if ($('#form-annee').valid()) {
            modifierAnnee();
        }
    });

    // Remplir form pour modification
   $(document).on('click', '.modifierAnnee', function (event) {
    event.preventDefault();

    // Récupération de l'id depuis l'attribut data-id (meilleur que mettre en dur "1")
    const id = $(this).data('id');
 

    // Vérifier si l'id est bien un entier positif
    if (!id || isNaN(id) || parseInt(id) <= 0) {
        toastr.error("ID de l'année invalide !");
        return;
    }

    $.ajax({
        type: 'GET',
        url: "/annees/modifier/" + parseInt(id), // sécuriser avec parseInt

        success: function (annee) {
            if (!annee || !annee.id) {
                toastr.error("Année introuvable !");
                return;
            }

            // Remplir les champs du formulaire
            $('#annee_id').val(annee.id);
            $('#libelle').val(annee.libelle);

            // Adapter le modal pour la modification
            $('#modalAnneeLabel').text("Modifier une année");
            $('#btn-ajouter').addClass('d-none');
            $('#btn-modifier').removeClass('d-none');

            // Ouvrir le modal
            $('#addAnnee').modal('show');
        },
        error: function (xhr) {
            let message = 'Erreur lors de la récupération de l\'année.';
            if (xhr.responseJSON && xhr.responseJSON.message) {
                message = xhr.responseJSON.message;
            }
            toastr.error(message);
        }
    });
});



    // Supprimer annee
    $(document).on('click', '.supprimerAnnee', function (event) {
        event.preventDefault();
        const id = $(this).data('id');

        Swal.fire({
            title: "Supprimer ce annee ?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: "Oui, supprimer",
            cancelButtonText: "Annuler"
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'POST',
                    url: "/annees/delete/" + id, // RESTful : DELETE /annees/{id}
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    success: function (res) {
                        notifierSuccesEtRecharger(res.message);
                    },
                    error: function (xhr) {
                        let message = 'Erreur lors de la suppression du annee.';
                        if (xhr.responseJSON && xhr.responseJSON.message) {
                            message = xhr.responseJSON.message;
                        }
                        toastr.error(message);
                    }
                });
            }
        });
    });

});

function lancerAnnee() {
    clearAnneeForm();
    $('#modalAnneeLabel').text('Ajouter un annee');
    $('#btn-ajouter').removeClass('d-none');
    $('#btn-modifier').addClass('d-none');
    $('#addAnnee').modal('show');
}

function clearAnneeForm() {
    $('#form-annee')[0].reset();
    $('#annee_id').val('');
    $('.error-text').text('');
}

function enregistrerAnnee() {
    let form = document.getElementById('form-annee');
    let formData = new FormData(form);

    $.ajax({
        type: 'POST',
        url: "/annees/save",
        data: formData,
        processData: false,
        contentType: false,
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        success: function (res) {
            notifierSuccesEtRecharger(res.message);
        },
        error: function (xhr) {
            handleAjaxError(xhr);
        }
    });
}

function modifierAnnee() {
    let form = document.getElementById('form-annee');
    let id = $('#annee_id').val();
    let formData = new FormData(form);

    $.ajax({
        type: 'POST',
        url: "/annees/update/" + id,
        data: formData,
        processData: false,
        contentType: false,
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        success: function (res) {
            notifierSuccesEtRecharger(res.message);
        },
        error: function (xhr) {
            handleAjaxError(xhr);
        }
    });
}

function handleAjaxError(xhr) {
    if (xhr.status === 422) {
        let errors = xhr.responseJSON.errors;
        let messages = [];
        for (let field in errors) {
            messages = messages.concat(errors[field]);
        }
        verifierFormulaire(messages);
    } else {
        let msg = xhr.responseJSON?.message || "Erreur serveur inconnue.";
        toastr.error(msg);
    }
}

function verifierFormulaire(erreurs) {
    toastr.options = {
        closeButton: true,
        progressBar: true,
        positionClass: "toast-top-right",
        timeOut: "3000"
    };

    erreurs.forEach(function(message) {
        toastr.error(message);
    });
}

function notifierSuccesEtRecharger(message = "Traitement effectué avec succès !") {
    toastr.options = {
        closeButton: true,
        progressBar: true,
        positionClass: "toast-top-right",
        timeOut: "2000",
        onHidden: function() {
            location.reload();
        }
    };
    toastr.success(message);
}
