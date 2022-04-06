<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Vote chez toi ! - Inscription</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<?php
    try
    {
    $bdd = new PDO("mysql:host=localhost:8889;dbname=vct","root","root");
  }
  catch(exception $e)
  {
    die("Erreur de Connexion");
  }

  if(isset($_POST['valider']))
  {
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $email =  $_POST['email'];
    $adresse = $_POST['adresse'];
    $sexe = $_POST['sexe'];
    $tel = $_POST['tel'];
    $datenaiss = $_POST['datenaiss'];
    $numci = $_POST['numci'];
    $mdp1 = $_POST['mdp1'];
    $mdp2 = $_POST['mdp2'];


    if($mdp1 == $mdp2)

    {

      $requete = $bdd->query("INSERT INTO ELECTEUR (NOM, PRENOM, DATENAISS, ADRESSE, MDP,SEXE,EMAIL,TEL,NUMCI) VALUES('$nom','$prenom','$datenaiss','$adresse', '$mdp1','$sexe','$email','$tel','$numci')");

      echo '<p style="text-align: center;">Votre inscription a bien été prises en compte. </p>';

    }
    else{
      echo 'Erreur mot de passe est different !!!';
    }
  }
?>

<body>
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Créer votre compte !</h1>
                            </div>
                            <form method="post" class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="prenom" placeholder="Prénom">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="nom" placeholder="Nom">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="email" placeholder="Adresse mail">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="adresse" placeholder="Adresse">
                                </div>
                                <div class="form-group">
                                    <input type="phone" class="form-control form-control-user" name="tel" placeholder="Téléphone portable">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="sexe" placeholder="Sexe">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="datenaiss" placeholder="Date de Naissance">
                                </div>
                                
                                <div class="form-group">
                                    <input type="idCard" class="form-control form-control-user" name="numci" placeholder="Numéro carte identité">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" name="mdp1" placeholder="Mot de passe">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" name="mdp2" placeholder="Confirmer mot de passe">
                                    </div>
                                </div>
                                
                                <button type="submit" class="btn btn-primary btn-user btn-block" name="valider">Se connecter</button>
                                
                                
                            </form>
                            <hr>
                            <div class="text-center">
                                
                            </div>
                            <div class="text-center">
                                <a class="small" href="firstSelect.html">Vous avez déjà un compte ?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>



</body>

</html>