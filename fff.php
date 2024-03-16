<?php
    if(isset($_GET['accepte-cookie'])){
        setcookie('accepte-cookie', 'true', time() + 365243600);
        header('Location:./');
        die();
    }

?>

<!DOCTYPE html>
<html lang="fr">
    <head>

        <meta charset="UTF-8">
        <meta name="description" content="">
        <title>
          <?php echo "Webcourse" 
        ?>
        </title>

        <link rel="stylesheet" href="fff.css">

     <ul>
            <li><a href="fff.php">Accueil</a></li>
            <li><a href="about.php">Qui sommes-nous ?</a></li>
            <li><a href="calendrier.php">Calendrier évènementiel</a></li>
            <li><a href="infos.php">Informations Club</a></li>
            <li><a href="nouveaux_membres.php">Nouveau membre</a></li>
            <li><a href="inscription_epreuve.php">Inscription épreuve</a></li>
            <li><a href="liste_membres.php">Déjà inscrit</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
    </head>

    

        

        <br><center>
          <h1>
          BIENVENUE SUR LE SITE DU CLUB WEBCOURSE</h1>
          <HR size=2 align=center width="100%">

            <img src="capture.png" class="svg">
          </center>
          <HR size=2 align=center width="100%">



        </pre></h4></center></span>          
        
       
    <center><p><h2>

        <br>Ce site est dédié aux coureurs amateurs et professionnels cherchant à participer à différentes courses au niveau national.
        <br><br><br>Pour vous aider, un calendrier évènementiel présentant les courses par régions, dates et lieux est à votre disposition.</br>
        <br>Des informations par club vous sont présentés (nombre d'adhérents, classement)
        Dans votre espace personnel, vous trouverez le bulletin d'inscription pour la participation à un évènement, vos statistiques de courses, vos classements.
        <br></br>Pour nous contacter, vous pouvez utiliser l'onglet contact ou bien nous joindre par email à l'evenementiel sio@sitewebdescourses.fr</h2></center>
    </p>
    <br><br><br>
<center><img src="course.png"/></center>
<br><br><br>
    <footer class="footer-distributed">

      <div class="footer-right">

        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-github"></i></a>

      </div>

      <div class="footer-left">

        <p class="footer-links">
          <a class="link-1" href="mention.php">Mentions légales</a>

          <a href="politique.php">Politique de confidentialité</a>

          <a href="cookies.php">Gestion des cookies</a>

          <a href="droit.php">Droit à l'image</a>
        </p>

        <p>Webcourses by Anthony, Redwan &copy; 2022</p>
      </div>

    </footer>

<?php

if(!isset($_COOKIE['acceptecookie.php']))

{   

?>



<div class="banniere">
<div class="consent-popup" id="consent-popup">
    <div class="text-banniere">
        <p>Notre site utilise des cookies pour une meilleure expérience :</p>
    </div>
    <div id="tout">
    <div class="button-banniere-accept">
        <a href="acceptecookie.php">Tout accepter</a>
</div>


</div>
<div class="button-banniere-refuse">
        <a href="refusecookie.php">Tout Refuser</a>

<script>
function refuserTout() {
  // Trouver la fenêtre de consentement
  var popup = document.querySelector(".consent-popup");

  // Supprimer la fenêtre de consentement
  popup.remove();
}
</script>


    <div class="button-banniere-perso">
        <a href="cookies2.php">Personnaliser</a>
        
        
</div>
</div>

</div>

</div>



<?php

   }    

?>
    

    </html>
