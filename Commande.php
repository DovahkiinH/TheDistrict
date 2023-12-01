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

        <?php include 'Assets/Php/footer.php';
      
      ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="/Assets/Js/Formulaire.js">

    </script>

    </div>

</body>

</html>
