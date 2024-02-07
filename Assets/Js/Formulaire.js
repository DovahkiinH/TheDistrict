function validateCommandeForm() {
    var NomPrenom = $("#NomPrenom").val();
    var email = $("#email").val();
    var Adresse = $("#Adresse").val();
    var Quantite = $("#Quantite").val();

    if (NomPrenom && email && Adresse && Quantite) {
        return true;
    } else {
        alert("Veuillez remplir tous les champs du formulaire de commande.");
        return false;
    }
}

$("#commandeForm").submit(function (event) {

    if (validateCommandeForm()) {
        var commandeFormData = {
            NomPrenom: $("#NomPrenom").val(),
            email: $("#email").val(),
            Adresse: $("#Adresse").val(),
            Quantite: $("#Quantite").val()
        };

    } else {

    }
});