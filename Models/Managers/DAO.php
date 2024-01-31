<?php
require_once 'Models/connexion.php';
require_once 'Models/Classes/Categorie.class.php';

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
}