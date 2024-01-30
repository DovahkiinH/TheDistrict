  <?php require_once 'Assets/Php/header.php';
        require_once 'Models/connexion.php';
  
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

              <ul id="results" class="list-group mt-5"></ul>

            </div>

        </form>

          </div>

        </div>

        <div class="parallax d-none d-md-block"></div>

      <section id="categorie">

        <div class="col-12 d-flex mx-5 justify-content-around">

          <a href="/PlatCategorie.php">
            <img src="/Assets/Img/category/burger_cat.jpg" class="col-8 mt-2 rounded-4 zoom" title="Catégorie Burger"/>
            </a>
  
          <a href="/PlatCategorie.php">
            <img src="/Assets/Img/category/pizza_cat.jpg" class="col-8 mt-2 rounded-4 zoom" title="Catégorie Pizza"/>
            </a>
  
          <a href="/PlatCategorie.php">
            <img src="/Assets/Img/category/sandwich_cat.jpg" class="col-8 mt-2 rounded-4 zoom" title="Catégorie Sandwich"/>
            </a>
  
        </div>

        <div class="col-12 mt-2 mx-5 d-flex justify-content-around">

        <a href="PlatCategorie.php">
          <img src="/Assets/Img/category/wrap_cat.jpg" class="col-8 my-2 rounded-4 zoom" title="Catégorie Wrap"/>
          </a>

        <a href="PlatCategorie.php">
          <img src="/Assets/Img/category/pasta_cat.jpg" class="col-8 my-2 rounded-4 zoom" title="Catégorie Pâtes"/>
          </a>

        <a href="PlatCategorie.php">
          <img src="/Assets/Img/category/veggie_cat.jpg" class="col-8 my-2 rounded-4 zoom" title="Catégorie Veggie"/>
          </a>

        </div>

      </section>

      <div class="parallax2 d-none d-md-block"></div>

      <div id="plats">

        <div class="col-12 mx-5 d-flex justify-content-around">

          <a href="Plats.php">
            <img src="/Assets/Img/menu-burger.jpg" class="col-8 my-2 rounded-4 zoom" title="Burger"/>
            </a>
  
          <a href="Plats.php">
            <img src="/Assets/Img/menu-pizza.jpg" class="col-8 my-2 rounded-4 zoom" title="Pizza"/>
            </a>
  
          <a href="Plats.php">
            <img src="/Assets/Img/food/Food.Name.3461.jpg" class="col-8 my-2 rounded-4 zoom" title="Wrap"/>
            </a>
  
        </div>

      </div>

      <?php include 'Assets/Php/footer.php';
      
      ?>

          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="/Assets/Js/Recherche.js">

    </script>

    </div>

</body>

</html>
