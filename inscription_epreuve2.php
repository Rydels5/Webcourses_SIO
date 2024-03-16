<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription épreuve</title>
</head>
<body>



<p class="tetepage">Pour revenir à la page d'accueil, <a href="fff.php">cliquez-ici !</a> </p>

<p class="tetepage"> Partie pour se connecter à la base webcourses </p>



<?php


try
{
    $bdd = new pdo('mysql:host=localhost;dbname=webcourses;charset=utf8','root','');
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

    echo("<p id='reussi'>Connexion réussi ! </p><br/>");
}

catch (Exception $e)
{
    die('Erreur de connexion : ' . $e->getMessage());

}

$reponse = $bdd->query('SELECT * FROM membre'); //on lit les données

//on affiche chaque entrée obtenue



while($donnes = $reponse->fetch()) //on récupère les données
{
 ?>
 

<p id="select"> Nom : <?php echo $donnes['Nom']; ?>  <br/>
Prénom : <?php echo $donnes['Prenom']; ?><br/>
Email : <?php echo $donnes['Email'];?> <br/>
Mot de passe : <?php echo $donnes['password'];?> <br/>
Pseudo : <?php echo $donnes['pseudo']; ?>

</p>
<?php

}

$reponse->closeCursor();



?>



</body>
</html>