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
<HR size=2 align=center width="100%">

</head>
<body>
      <form method="post" action="connexion3.php">
        <div class="inputs">
          <input type="number" placeholder="num_inscription" name="num_inscription" required="required"/>  
          <select id="taille_maillot" name="taille_maillot" required="required">
            <option value="S">Taille S</option>
            <option value="M">Taille M</option>  
            <option value="XL">Taille XL</option>
            <option value="2XL">Taille 2XL</option>  
          </select> 
          <input type="date" placeholder="date" name="date" required="required"/>
          <select id="certificat_medical" name="certificat_medical" required="required">
            <option value="1">Non</option>
            <option value="2">Oui</option>   
          </select> 
          <input type="number" placeholder="carte_licencier" name="carte_licencier" required="required"/>  
          <input type="number" placeholder="num_dossard" name="num_dossard" required="required"/>
        </div>
        <p><input type="checkbox" name="coche" value="coche" onClick="Valider(this.form)" /> En cochant cette case, j'accepte les conditions générales d'utilisation de Webcourse.</p> 
        <p><input type="submit" name="valider" value="S'inscrire" /></p>
      </form> 
    </p>
  </center>
</body>
</html>