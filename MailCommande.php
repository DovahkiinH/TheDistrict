<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'vendor/autoload.php';

require_once 'Models/connexion.php';

//Formulaire

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nom = ($_POST["NomPrenom"]);;
    $email = ($_POST["email"]);
    $adresse = ($_POST["Adresse"]);
    $telephone = ($_POST["Telephone"]);
    $quantite = ($_POST["Quantite"]);
    $platLibelle = ($_POST["libelle"]);
    $platPrix = ($_POST["prix"]);
    $prixTotal = $platPrix * $quantite;

//Message

$contenueMail = "<h4> Votre commande est en route</h4>";
$contenueMail .= "$nom<br>";
$contenueMail .= "$adresse<br>";
$contenueMail .= "$telephone<br>";
$contenueMail .= "$platLibelle<br>";
$contenueMail .= "Qté : $quantite<br>";
$contenueMail .= "$prixTotal €<br>";

$bdd = dbconnect();

//Envoie

$mail = new PHPMailer(true);

$mail->isSMTP();

$mail->Host = 'localhost';    

$mail->SMTPAuth = false;    

$mail->Port = 1025;

$mail->setFrom('from@thedistrict.com', 'The District Company');

$mail->addAddress($email , $nom);

$mail->addReplyTo("reply@thedistrict.com", "Reply");

$mail->isHTML(true);

$mail->Subject = 'Validation de la commande';

$mail->Body = $contenueMail;

if ($mail) {
    try {
        $mail->send();
        header("location: Index.php");

    } catch (Exception $e) {
        echo "Erreur";
    }
}

}