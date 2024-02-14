  <?php 
  require_once 'Models/Managers/DAO.php';

  $categories = DAO::getCategoriePopulaire();
  $plats = DAO::getPlatPlusVendu();

  require_once 'Views/IndexView.php';
