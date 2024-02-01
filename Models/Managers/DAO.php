<?php
require_once 'Models/connexion.php';
require_once 'Models/Classes/Categorie.class.php';
require_once 'Models/Classes/Plats.Class.php';

class DAO {

    public static function getCategoriePopulaire() {

        $bdd = dbconnect();

        try {

            $query = "SELECT c.id, c.libelle, c.image, COUNT(co.id) AS total_commandes
            FROM categorie c
            LEFT JOIN plat p ON c.id = p.id_categorie
            LEFT JOIN commande co ON p.id = co.id_plat
            GROUP BY c.id
            ORDER BY total_commandes DESC
            LIMIT 6"; 

            $stmt = $bdd->prepare($query);
            $stmt->execute();

            $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $categories;
        } catch (PDOException $e) {
            exit('Erreur lors de l\'exécution de la requête : ' . $e->getMessage());
        }
    }

    public static function getPlatPlusVendu(){

        $bdd = dbconnect();

        try {

            $query = "SELECT plat.id, plat.libelle, plat.description, plat.image, COUNT(commande.id_plat) AS total_ventes
            FROM plat
            LEFT JOIN commande ON plat.id = commande.id_plat
            GROUP BY plat.id
            ORDER BY total_ventes DESC
            LIMIT 3";

            $stmt = $bdd->prepare($query);
            $stmt->execute();

            $plats = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $plats;
        } catch (PDOException $e) {

            exit('Erreur lors de l\'exécution de la requête : ' . $e->getMessage());
                   
        }

    }

    public static function getCategorieActive(){

        $bdd = dbconnect();

        try {

            $query = "SELECT libelle, image
            FROM categorie
            WHERE active = 'yes'
            LIMIT 6";

            $stmt = $bdd->prepare($query);
            $stmt->execute();

            $categorieA = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $categorieA;
        } catch (PDOException $e) {

            exit('Erreur lors de l\'exécution de la requête : ' . $e->getMessage());
                   
        }

    }

    public static function getPlats(){

        $bdd = dbconnect();

        try {

            $query = "SELECT  id, libelle, description, prix, image
            FROM plat
            LIMIT 6";

            $stmt = $bdd->prepare($query);
            $stmt->execute();

            $platD = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $platD;
        } catch (PDOException $e) {

            exit('Erreur lors de l\'exécution de la requête : ' . $e->getMessage());
                   
        }

    }

    public static function getPlatCategorie($id){

        $bdd = dbconnect();

        try {

            $query = "SELECT id, libelle , description , prix ,image
            FROM plat 
            WHERE id_categorie = :id
            LIMIT 6";

            $stmt = $bdd->prepare($query);
            $stmt->bindParam(':id',$id);
            $stmt->execute();

            $platCategorie = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $platCategorie;
        } catch (PDOException $e) {

            exit('Erreur lors de l\'exécution de la requête : ' . $e->getMessage());
        }
    }
}