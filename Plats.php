<?php include 'Assets/Php/header.php'; 
  
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

          <?php include 'Assets/Php/footer.php';
      
      ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="/Assets/Js/JsonPlats.js">

    </script>

    </div>

</body>

</html>
