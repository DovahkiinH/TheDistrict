<?php include 'Views/Partials/header.php'; 
  
  ?>
        <section>

            <fieldset>

                <div class="col-4">
    
                  <label for="NomPrenom" class="mt-5">Nom et Prénom:</label>

                  <input type="text" name="NomPrenom" id="NomPrenom" placeholder="Veuillez saisir votre nom et votre prénom" required="required" class="form-control mr-sm-2">
    
                  <div class="alert alert-danger mt-2 d-none" id="nom_erreur"> Veuillez saisir un nom et un prénom valide.</div>

                </div>

                <div class="col-8 d-flex justify-content-between">

                    <div class="col-6">

                        <label for="email" class="mt-5">Email:</label>
                        
                        <input type="email" name="email" id="email" placeholder="dave.loper@afpa.fr" required="required" class="form-control mr-sm-2">

                        <div class="alert alert-danger mt-2 d-none" id="email_erreur"> Veuillez saisir une adresse email valide.</div>

                    </div>

                    <div class="col-5">

                        <label for="Telephone" class="mt-5">Téléphone:</label>
                        
                        <input type="text" name="Telephone" id="Telephone" placeholder="06 00 00 00 00" required="required" class="form-control mr-sm-2">

                        <div class="alert alert-danger mt-2 d-none" id="Tel_erreur"> Veuillez saisir un numéro de téléphone valide.</div>

                    </div>

                </div>

                <div>

                    <label for="Adresse" class="mt-5">Adresse:</label>
                    
                    <input type="text" name="Adresse" id="Adresse" required="required" class="form-control mr-sm-2">

                    <div class="alert alert-danger mt-2 d-none" id="Adresse_erreur"> Veuillez saisir une adresse valide.</div>

                </div>

                <div class="d-flex justify-content-end">

                  <button id="verifierBouton" class="btn btn-primary my-2">Valider</button>

                </div>

            </fieldset>

        </section>

        <?php include 'Views/Partials/footer.php';
      
      ?>

    <script src="/Assets/Js/Formulaire.js">

    </script>
