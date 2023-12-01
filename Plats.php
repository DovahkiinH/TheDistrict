<!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="Keywords" content="Restauration,the district,commande,nourriture">
    <meta name="Subject" content="Restauration">
    <meta name="Author" content="Loick.C">
    <meta name="Geography" content="Amiens,France,80000">
    <meta name="Category" content="shopping">

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="/Assets/Css/Css.css">

    <title>The District</title>

</head>

<body>

  <?php include 'Assets/Php/header.php'; 
  
  ?>
    
        </header>

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
