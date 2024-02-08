<?php 
    require_once 'Views/Partials/header.php';
?>

<div class="video-container">

        <video autoplay loop muted>

            <source src="/Assets/Img/BgVideo.mp4" type="video/mp4">

            Votre navigateur ne prend pas en charge la lecture de vidéos HTML5.

        </video>

        <div class="custom-search-bg col-12 d-flex flex-wrap">

            <form class="form-inline col-2">

                <div class="input-group">

                    <input type="text" id="searchInput" class="form-control" placeholder="Saisissez un plat...">
                
                </div>
                
            </form>
            
        </div>
        
        
</div>
    
<div>
    
    <div id="results" class="mt-3 d-flex justify-content-around flex-wrap"></div>

</div>

<div class="parallax d-none d-md-block"></div>

    <div class=" mt-3 d-flex justify-content-around flex-wrap">

<?php
        
$categories = DAO::getCategoriePopulaire();
        
    foreach ($categories as $categorie) {

        echo '

            <div class="col-6 col-lg-4 my-3 d-flex justify-content-center text-center">
                <div class="card col-5 pt-2 px-2">
                    <img src="Assets/Img/category/' . $categorie['image'] . '" class="card-img-top card-img" alt="Image de la carte">
                    <div class="card-body">
                        <h5 class="card-title text-center">' . $categorie['libelle'] . '</h5>
                        <a href="PlatCategorie.php?categorie_id=' . $categorie['id'] . '" class="btn btn-primary btn-mod">Voir les plats</a>
                    </div>
                </div>
            </div>';
        }

?>
 
    </div>

<div class="parallax2 d-none d-md-block"></div>

    <div class=" mt-3 row d-flex justify-content-around flex-wrap">

<?php

$plats = DAO::getPlatPlusVendu();

    foreach ($plats as $plat) {

        echo '

            <div class="col-6 col-lg-4 my-3 d-flex justify-content-center text-center">
                <div class="card col-5 pt-2 px-2">
                    <img src="Assets/Img/food/' . $plat['image'] . '" class="card-img-top card-img" alt="Image de la carte">
                    <div class="card-body">
                        <h5 class="card-title text-center">' . $plat['libelle'] . '</h5>
                        <a href="Commande.php?plat_id=' . $plat['id'] . '" class="btn btn-primary btn-mod">Passer une commande</a>
                    </div>
                </div>
            </div>';
        }

?>

    </div>

<?php require_once 'Views/Partials/footer.php';
      
?>

<script src="/Assets/Js/Recherche.js">

</script>

