<!DOCTYPE html>
<html lang="fr">
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

    <!-- Votre pied de page (footer) ici -->
</body>
</html>
