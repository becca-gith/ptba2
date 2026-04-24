jQuery(document).ready(function() {

    // Réinitialise le formulaire au chargement
    clearData();

    // Validation du formulaire de connexion (id="form-login")
    $('#form-login').validate({
        rules: {
            login_utilisateur: {
                required: true,
                maxlength: 255
            },
            mot_passe: {
                required: true,
                maxlength: 100
            },
            type_projet: {
                required: true,
                digits: true // si la valeur est l'id du projet
            }
        },
        messages: {
            login_utilisateur: {
                required: "Le login est requis.",
                maxlength: "Le login est trop long."
            },
            mot_passe: {
                required: "Le mot de passe est requis.",
                maxlength: "Le mot de passe est trop long."
            },
            type_projet: {
                required: "Veuillez sélectionner un projet."
            }
        },
        invalidHandler: function(event, validator) {
            let erreurs = validator.errorList.map(e => e.message);
            verifierFormulaire(erreurs);
        },
        errorPlacement: function() {
            return false; // on désactive l'affichage inline
        }
    });

    // Bouton de connexion (id="authentifier")
    $("#authentifier").click(function(event) {
        event.preventDefault();

        if ($('#form-login').valid()) {
            authentifier();
        }
    });
});

// Vide et reset le formulaire
function clearData() {
    $('#form-login')[0].reset();
    $('.error-text').text('');
}

// Envoie la requête ajax pour authentifier l'utilisateur
function authentifier() {
    let form = document.getElementById('form-login');
    let formData = new FormData(form);

    // Sécurité supplémentaire : champ obligatoire
    if (!formData.get('type_projet')) {
        toastr.error("Veuillez choisir un projet.");
        return;
    }

    $.ajax({
        type: 'POST',
        url: "/login",
        data: formData,
        processData: false,
        contentType: false,
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        success: function(data) {
            console.log('Réponse:', data);

            if (data.success) {
                notifierSuccesEtRecharger(data.message);

                if (data.compte && data.compte.id) {
                    setTimeout(() => {
                        window.location.href = '/';
                    }, 2000);
                }
            } else {
                // ✅ gestion par code d’erreur spécifique
                switch (data.code) {
                    case "NO_PROJECT":
                        toastr.error("Veuillez sélectionner un projet valide.");
                        break;
                    case "MISSING_FIELDS":
                        toastr.error("Veuillez remplir tous les champs.");
                        break;
                    case "EMPTY_FIELDS":
                        toastr.error("Les champs ne peuvent pas être vides.");
                        break;
                    case "USER_NOT_FOUND":
                        toastr.error("Utilisateur non trouvé.");
                        break;
                    case "INVALID_PASSWORD":
                        toastr.error("Mot de passe incorrect.");
                        break;
                    case "ACCOUNT_DELETED":
                        toastr.error("Votre compte a été supprimé.");
                        break;
                    case "ACCOUNT_INACTIVE":
                        toastr.error("Votre compte est inactif. Contactez l’administrateur.");
                        break;
                    case "ACCOUNT_BLOCKED":
                        toastr.error("Votre compte est bloqué. Contactez l’administrateur.");
                        break;
                    case "SERVER_ERROR":
                        toastr.error("Erreur interne. Réessayez plus tard.");
                        break;
                    default:
                        toastr.error(data.message || "Erreur inconnue lors de la connexion.");
                        break;
                }
            }
        },
        error: function(xhr) {
            handleAjaxError(xhr);
        }
    });
}

// Gestion des erreurs ajax
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

// Affiche les messages d'erreur avec toastr
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

// Affiche le message succès puis redirige
function notifierSuccesEtRecharger(message = "Connexion réussie !") {
    toastr.options = {
        closeButton: true,
        progressBar: true,
        positionClass: "toast-top-right",
        timeOut: "2000"
    };
    toastr.success(message);
}
