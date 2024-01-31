  <?php 
  require_once 'Models/Managers/DAO.php';

  $categories = DAO::getCategoriePopulaire();

  require_once 'Views/IndexView.php';

        