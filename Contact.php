<!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="Keywords" content="Restauration,the district,commande,nourriture">
    <meta name="Subject" content="Restauration">
    <meta name="Author" content="Loick.C">
    <meta name="Geography" content="Amiens,France,80000">
    <meta name="Category" content="shopping">

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="/Assets/Css/Css.css">

    <title>The District</title>

</head>

<body>

  <?php include 'Assets/Php/header.php'; 
  
  ?>
    
        </header>

        <section>

            <fieldset>

                <div class="col-8 d-flex justify-content-between">

                    <div class="col-6">
    
                    <label for="Nom" class="mt-5">Nom:</label>

                    <input type="text" name="Nom" id="Nom" placeholder="Veuillez saisir votre nom " required="required" class="form-control mr-sm-2">
    
                    <div class="alert alert-danger mt-2 d-none" id="nom_erreur"> Veuillez saisir un nom et un prénom valide.</div>

                    </div>

                    <div class="col-5">
    
                    <label for="Prenom" class="mt-5">Prénom:</label>

                    <input type="text" name="Prenom" id="Prenom" placeholder="Veuillez saisir votre prénom " required="required" class="form-control mr-sm-2">
    
                    <div class="alert alert-danger mt-2 d-none" id="prenom_erreur"> Veuillez saisir un nom et un prénom valide.</div>

                    </div>

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

                    <label for="Demande" class="mt-5">Votre demande:</label>
                    
                    <input type="text" name="Demande" id="Demande" required="required" class="form-control mr-sm-2">

                    <div class="alert alert-danger mt-2 d-none" id="Demande_erreur"> Veuillez saisir une adresse valide.</div>

                </div>

                <div class="d-flex justify-content-end">

                  <button id="verifierBouton" class="btn btn-primary my-2">Envoyer</button>

                </div>

            </fieldset>

        </section>

        <?php include 'Assets/Php/footer.php';
      
      ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="/Assets/Js/FormulaireContact.js">

    </script>

    </div>

</body>

</html>
