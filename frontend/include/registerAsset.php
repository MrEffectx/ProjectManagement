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