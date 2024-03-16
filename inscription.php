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
          </center></br>


        </pre></h4></center></span>          
        
       
    <center>


    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formulaire d'inscription</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
  <script type="text/javascript">
function Valider(formulaire) {
if(formulaire.coche.checked == true) {formulaire.valider.disabled = false }
if(formulaire.regagree.checked == false) {formulaire.validation.disabled = true }
}
</script>

</head>
<body>
  <form>
     
    <h1>S'inscrire en tant que coureur</h1>
    <div class="social-media">
      <p><i class="fab fa-google"></i></p>
      <p><i class="fab fa-youtube"></i></p>
      <p><i class="fab fa-facebook-f"></i></p>
      <p><i class="fab fa-twitter"></i></p>
    </div>
    <p class="choose-email">ou utiliser mon adresse e-mail :</p>
    
    <div class="inputs">
      <input type="email" placeholder="Email" />
      <input type="email" placeholder="Nom" />
      <input type="email" placeholder="Prénom" />
      <input type="email" placeholder="Date de naissance" />
      <input type="password" placeholder="Mot de passe">
    </div>
    <form action="" method="post">
<p><input type="checkbox" name="coche" value="coche" onClick="Valider(this.form)" /> En cochant cette case, j'accepte les conditions générales d'utilisation de Webcourse.</p>

<p><input type="submit" name="valider" value="S'inscrire" disabled /></p>
</form>
  </form>
</body>
</html>    
</center>
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
