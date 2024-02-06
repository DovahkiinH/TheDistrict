<?php

$pdo = new PDO('mysql:host=localhost;dbname=TheDistrict', 'admin', 'Afpa1234');

$query = $_POST['query'];


$stmt = $pdo->prepare("SELECT * FROM plat WHERE libelle LIKE :query");
$stmt->execute(['query' => "%$query%"]);
$plat = $stmt->fetchAll();

foreach ($plat as $plat) {
    echo "<li class='list-group-item'>$plat[libelle]</li>
     <li class='list-group-item'>$plat[prix]€</li>
     <li class='list-group-item'>$plat[description]</li>";

}

