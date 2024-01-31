  <?php include 'Views/Partials/header.php'; 
  
  ?>
        <div class="video-container">

          <video autoplay loop muted>

              <source src="/Assets/Img/BgVideo.mp4" type="video/mp4">

              Votre navigateur ne prend pas en charge la lecture de vidéos HTML5.

          </video>

        </div>

          <section id="categorie">

            <div id="carousel" class="carousel slide">

              <div class="carousel-inner">

              </div>

              <div id="bouton" class="d-flex justify-content-between">

                  <button class="btn btn-outline-dark border-2" data-slide="prev" data-target="#carousel">

                      Précédent

                  </button>

                  <button class="btn btn-outline-dark border-2" data-slide="next" data-target="#carousel">

                      Suivant

                  </button>

              </div>
              
          </div>
            
          </section>

          <?php include 'Views/Partials/footer.php';
      
      ?>

    <script src="/Assets/Js/Json.js">

    </script>