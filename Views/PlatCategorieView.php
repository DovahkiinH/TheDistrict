<?php include 'Views/Partials/header.php'; 
  
?>

    <div class="video-container">

        <video autoplay loop muted>

            <source src="/Assets/Img/BgVideo.mp4" type="video/mp4">

              Votre navigateur ne prend pas en charge la lecture de vidéos HTML5.

        </video>

    </div>

<section id="PlatCategorie" class="mt-3 d-flex justify-content-around flex-wrap">

    <?php

        $platCategorie = DAO::getPlatCategorie($id);

        foreach ($platCategorie as $plat) {

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
    ?>


</section>

<?php require_once 'Views/Partials/footer.php';
      
?>