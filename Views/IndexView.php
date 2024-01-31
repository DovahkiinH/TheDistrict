<?php 
    require_once '../Views/Partials/header.php';
?>

<div class="video-container">

          <video autoplay loop muted>

              <source src="/Assets/Img/BgVideo.mp4" type="video/mp4">

              Votre navigateur ne prend pas en charge la lecture de vidéos HTML5.

          </video>

          <div class="custom-search-bg">

            <form class="form-inline">

                <div class="input-group">

                    <input type="text" id="searchInput" class="form-control" placeholder="Saisissez un plat...">
                
                </div>

            </form>
            
            <ul id="results" class="list-group mt-2"></ul>
        
        </div>
        
</div>

        <div class="parallax d-none d-md-block"></div>

        <?php
        $categories = DAO::getCategoriePopulaire();
        foreach ($categories as $categorie) {
            echo '
            <div class="col-md-4 d-flex justify-content-center justify-content-md-end mb-4">
                <div class="card zoom">
                    <img src="Assets/Img/category/' . $categorie['image'] . '" class="card-img-top card-img" alt="Image de la carte">
                    <div class="card-body">
                        <h5 class="card-title">' . $categorie['libelle'] . '</h5>
                    </div>
                </div>
            </div>';
        }
        ?>
 
        <div class="parallax2 d-none d-md-block"></div>

      

      <?php include '../Views/Partials/footer.php';
      
      ?>

    <script src="/Assets/Js/Recherche.js">

    </script>

