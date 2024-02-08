<?php

$pdo = new PDO('mysql:host=localhost;dbname=TheDistrict', 'admin', 'Afpa1234');

$query = $_POST['query'];


$stmt = $pdo->prepare("SELECT * FROM plat WHERE libelle LIKE :query");
$stmt->execute(['query' => "%$query%"]);
$plat = $stmt->fetchAll();

foreach ($plat as $plat) {

    echo '

        <div class="col-6 col-lg-4 my-3 d-flex justify-content-center text-center">
            <div class="card zoom col-5 pt-2 px-2">
                <img src="Assets/Img/food/' . $plat['image'] . '" class="card-img-top card-img" alt="Image de la carte">
                <div class="card-body">
                    <h5 class="card-title">' . $plat['libelle'] . '</h5>
                    <p class="card-text">' . $plat['description'] . '</p>
                    <p class="card-text">Prix: ' . $plat['prix'] . ' €</p>
                    <a href="Commande.php?plat_id=' . $plat['id'] . '" class="btn btn-primary btn-mod">Passer une commande</a>
                </div>
            </div>
        </div>';

}

