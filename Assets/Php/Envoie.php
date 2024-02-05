<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["Nom"];
    $prenom = $_POST["Prenom"];
    $email = $_POST["Email"];
    $telephone = $_POST["Telephone"];
    $demande = $_POST["Demande"];

    $informations = "Nom: $nom\nPrenom: $prenom\nEmail: $email\nTelephone: $telephone\nDemande: $demande\n\n";

    $nomFichier = date("Y-m-d-H-i-s") . ".txt";
    $repertoire = "ResultatsFormulaire/";

    if (!file_exists($repertoire)) {
        mkdir($repertoire, 0777, true);
    }

    $cheminFichier = $repertoire . $nomFichier;

    file_put_contents($cheminFichier, $informations, FILE_APPEND);
}

header('Location : /Index.php')

?>