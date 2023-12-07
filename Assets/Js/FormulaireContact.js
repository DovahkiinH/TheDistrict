$(document).ready(function() {

    function validateName() {
        var Nom = $('#Nom').val();
        if (/^[a-zA-Z\s]*$/.test(Nom)) {
            $('#nom_erreur').addClass('d-none');
            return true;
        } else {
            $('#nom_erreur').removeClass('d-none');
            return false;
        }
    }

    function validatePrenom() {
        var Prenom = $('#Prenom').val();
        if (/^[a-zA-Z\s]*$/.test(Prenom)) {
            $('#prenom_erreur').addClass('d-none');
            return true;
        } else {
            $('#prenom_erreur').removeClass('d-none');
            return false;
        }
    }

    function validateEmail() {
        var email = $('#email').val();
        if (/^\S+@\S+\.\S+$/.test(email)) {
            $('#email_erreur').addClass('d-none');
            return true;
        } else {
            $('#email_erreur').removeClass('d-none');
            return false;
        }
    }

    function validateTelephone() {
        var telephone = $('#Telephone').val();
        if (/^(\d{2}\s?){4}\d{2}$/.test(telephone)) {
            $('#Tel_erreur').addClass('d-none');
            return true;
        } else {
            $('#Tel_erreur').removeClass('d-none');
            return false;
        }
    }

    function validateDemande() {
        var demande = $('#Demande').val();
        if (demande.length > 0) {
            $('#Demande_erreur').addClass('d-none');
            return true;
        } else {
            $('#Demande_erreur').removeClass('d-none');
            return false;
        }
    }

    $('#verifierBouton').click(function() {
        var nomValide = validateName();
        var prenomValide = validatePrenom();
        var emailValide = validateEmail();
        var telephoneValide = validateTelephone();
        var demandeValide = validateDemande();

        if (nomValide && prenomValide && emailValide && telephoneValide && demandeValide) {
            $.ajax({
                type: 'POST',
                url: 'Assets/Php/Envoie.php',
                data: {
                    Nom: $('#Nom').val(),
                    Prenom: $('#Prenom').val(),
                    Email: $('#email').val(),
                    Telephone: $('#Telephone').val(),
                    Demande: $('#Demande').val()
                },
                success: function(response) {
                    console.log(response);
                },
                error: function(error) {
                    console.error(error);
                }
            });
        }
    });
});