<?php include 'Views/Partials/header.php'; 
  
  ?>
        <div class="video-container">

          <video autoplay loop muted>

              <source src="/Assets/Img/BgVideo.mp4" type="video/mp4">

              Votre navigateur ne prend pas en charge la lecture de vidéos HTML5.

          </video>

        </div>

          <section id="categorie" class="mt=3 row">

          <?php
        $categorieA = DAO::getCategoriePopulaire();
        foreach ($categorieA as $categorie) {

            echo '
            <div class="col-3 mx-5 my-3 d-flex justify-content-around">
                <div class="card zoom col-5 pt-2 px-2">
                    <img src="Assets/Img/category/' . $categorie['image'] . '" class="card-img-top card-img" alt="Image de la carte">
                    <div class="card-body">
                        <h5 class="card-title text-center">' . $categorie['libelle'] . '</h5>
                        <a href="PlatCategorie.php?categorie_id=' . $categorie['id'] . '" class="btn btn-primary btn-mod">Voir les plats</a>
                    </div>
                </div>
            </div>';
        }
        ?>
            
          </section>

          <?php include 'Views/Partials/footer.php';
      
