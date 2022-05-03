<?php
  try
    {
    $mysqli = new mysqli('localhost:8889','root','root','vct');
    }
  catch(exception $e)
    {
    die("Erreur de Connexion");
    }
 if(isset($_POST['login']))
 {

    $email= $_POST['email'];
    $mdp= $_POST['mdp'];

    $result= $mysqli->query("SELECT * FROM ELECTEUR WHERE EMAIL='$email' and MDP='$mdp'");

    $row_cnt = $result->num_rows;
    session_start();
    $_SESSION['electeur']= $email;


    if ($row_cnt == 1)
    {
    header("Location: indexParticulier.php?login=".$_SESSION['electeur']);
    } 
    else 
    {
     echo ' <br> <br> <br><p style="text-align: center;">Vos information ne sont pas correct ! </p>';
    }
  }

?>