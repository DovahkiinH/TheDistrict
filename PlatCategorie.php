<?php 
  require_once 'Models/Managers/DAO.php';

  if (isset($_GET['categorie_id'])) {
    $id = $_GET['categorie_id'];
    $platCategorie = DAO::getPlatCategorie($id);

  require_once 'Views/PlatCategorieView.php';

  }else {

    echo "Aucun plat n'appartient à cette Catégorie.";
}

        