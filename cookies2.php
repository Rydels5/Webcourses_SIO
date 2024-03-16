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
            <li><a href="index.php">Accueil</a></li>
            <li><a href="about.php">Qui sommes-nous ?</a></li>
            <li><a href="calendrier.php">Calendrier évènementiel</a></li>
            <li><a href="infos.php">Informations Club</a></li>
            <li><a href="inscription_epreuve.php">Inscription épreuve</a></li>
            <li><a href="liste_membres.php">Déjà inscrit</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
    </head>

        
        </script>
        <br><center>
            <img src="capture.png">
          </center></br>


        </pre></h4></center></span>          
        
        <HR size=2 align=center width="100%"><br>

        <div class="inner2">


<center>
 <!-- Formulaire HTML pour la gestion des cookies -->
<form action="verification.php" method="post">

<p>
  <label for="text">Type de consentement :</label><br /><br><br>
  <select name="Type_consentement">
      <option value="I">Implicite</option>
      <option value="E">Explicite</option>
  </select><br/>
</p>

<p>
  <input type="checkbox" name="Necessaire" value="1" />
  <label for="text1">Nécessaire </label><br />
</p>

<p>
  <input type="checkbox" name="Performance" value="1" />
  <label for="text2">Performance </label><br />
</p>

<p>
  <input type="checkbox" name="Fonctionnalite" value="1" />
  <label for="text3">Fonctionnalité </label><br />
</p>

<p>
  <input type="checkbox" name="Marketing" value="1" />
  <label for="text4">Marketing </label><br />
</p>

<p>

  <input type="checkbox" name="Autres" value="1" />
  <label for="text5">Autres </label><br />
</p>

<input type="submit" name="submit" value="Valider" />

<br/><br>

    </p>
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
    

    </html>