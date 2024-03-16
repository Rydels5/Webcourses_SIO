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

        
        </script>
        <br><center>
            <img src="capture.png">
          </center></br>


        </pre></h4></center></span>          
        
       
    <center><p>
    
    <h1>S'inscrire en tant que coureur</h1>
    <div class="social-media">
      <p><i class="fab fa-google"></i></p>
      <p><i class="fab fa-youtube"></i></p>
      <p><i class="fab fa-facebook-f"></i></p>
      <p><i class="fab fa-twitter"></i></p>
    </div><html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <title>Connexion</title>
    <link rel="stylesheet" href="fff.css">
</head>
<body>
    <!-- Votre en-tête (header) ici -->

    <h1>Se connecter</h1>
    <form method="POST" action="traitement_connexion.php">
        <div class="social-media">
            <!-- Boutons de connexion avec des réseaux sociaux (si nécessaire) -->
        </div>
        <p class="choose-email">ou utiliser mon adresse e-mail :</p>
        <div class="inputs">
            <input type="email" name="email" placeholder="Email" required />
            <input type="password" name="password" placeholder="Mot de passe" required>
        </div>
        <p class="inscription"><a href="#">Mot de passe oublié</a></p>
        <div align="center">
            <button type="submit">Se connecter</button>
        </div>
        <?php
            if (isset($_GET['error']) && $_GET['error'] == 1) {
                echo '<p style="color: red;">Mot de passe incorrect. Veuillez réessayer.</p>';
            }
        ?>
    </form>

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
    

    </html></body>
</html>
