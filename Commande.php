<?php 
require_once 'Models/Managers/DAO.php';

if (isset($_GET['plat_id'])) {
  $id = $_GET['plat_id'];
  $platFormulaire = DAO::getPlatFormulaire($id);
  
require_once 'Views/CommandeView.php';

} else {

  echo "Aucune information de commande n'est spécifiée.";
}

