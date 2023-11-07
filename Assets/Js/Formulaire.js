$(document).ready(function() {

    function validateName() {
        var NomPrenom = $('#NomPrenom').val();
        if (/^[a-zA-Z\s]*$/.test(NomPrenom)) {
            $('#nom_erreur').addClass('d-none');
            return true;
        } else {
            $('#nom_erreur').removeClass('d-none');
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


    function validateAdresse() {
        var adresse = $('#Adresse').val();
        if (adresse.length > 0) {
            $('#Adresse_erreur').addClass('d-none');
            return true;
        } else {
            $('#Adresse_erreur').removeClass('d-none');
            return false;
        }
    }

    $('#verifierBouton').click(function() {
        var nomValide = validateName();
        var emailValide = validateEmail();
        var telephoneValide = validateTelephone();
        var adresseValide = validateAdresse();

        if (nomValide && emailValide && telephoneValide && adresseValide) {
            alert('Formulaire valide. Vous pouvez soumettre.');
        } else {
            alert('Le formulaire contient des erreurs. Veuillez les corriger avant de soumettre.');
        }
    });
});