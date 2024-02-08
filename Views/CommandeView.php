<?php include 'Views/Partials/header.php'; 
  
?>

<section>

    <div class="d-flex justify-content-center">
            
        <?php

            $platFormulaire = DAO::getPlatFormulaire($id);

            foreach ($platFormulaire as $plat) {

            echo '

                <div class="col-3 mx-5 my-3 d-flex justify-content-around text-center">
                    <div class="card zoom col-5 pt-2 px-2">
                        <img src="Assets/Img/food/' . $plat['image'] . '" class="card-img-top card-img" alt="Image de la carte">
                        <div class="card-body">
                            <h5 class="card-title">' . $plat['libelle'] . '</h5>
                            <p class="card-text">' . $plat['description'] . '</p>
                            <p class="card-text">Prix: ' . $plat['prix'] . ' €</p>
                        </div>
                    </div>
                </div>';

                }
        ?>

    </div>

    <form id="commandeForm" class="d-flex justify-content-center flex-wrap" action="MailCommande.php" method="POST" enctype="multipart/form-data">

        <div class="col-4">
    
            <label for="NomPrenom" class="mt-5">Nom et Prénom:</label>

            <input type="text" name="NomPrenom" id="NomPrenom" placeholder="Veuillez saisir votre nom et votre prénom" required="required" class="form-control mr-sm-2">

        </div>

        <div class="col-12 d-flex justify-content-center">

            <div class="col-4 mx-2">

                <label for="email" class="mt-5">Email:</label>
                        
                <input type="email" name="email" id="email" placeholder="dave.loper@afpa.fr" required="required" class="form-control mr-sm-2">

            </div>

            <div class="col-4">

                <label for="Telephone" class="mt-5">Téléphone:</label>
                        
                <input type="text" name="Telephone" id="Telephone" placeholder="06 00 00 00 00" required="required" class="form-control mr-sm-2">

            </div>

        </div>

        <div class="col-12 d-flex justify-content-center">

            <div class ="mb-2 mx-2 col-4">

                <label for="Adresse" class="mt-5">Adresse:</label>
                    
                <input type="text" name="Adresse" id="Adresse" required="required" class="form-control mr-sm-2">

            </div>

            <div class ="mb-2 col-4">

                <label for="Quantite" class="mt-5">Quantité:</label>
                    
                <input type="text" name="Quantite" id="Quantite" required="required" class="form-control mr-sm-2">

                <input type="hidden" name="libelle" value="<?php echo $plat['libelle']; ?>">
                        
                <input type="hidden" name="prix" value="<?php echo $plat['prix']; ?>">
                
            </div>

        </div>

        <div class="align-self-end">

            <button class="btn btn-primary my-2">Valider</button>

        </div>

    </form>

</section>

<?php require_once 'Views/Partials/footer.php';
      
?>

<script src="/Assets/Js/Formulaire.js">

</script>
