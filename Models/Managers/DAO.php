<?php
require_once 'Models/connexion.php';

class DAO {

    public static function getCategoriePopulaire(){

    $bdd = dbconnect();
    $query = "SELECT image FROM categorie WHERE plat";

    }

}