<?php
session_start();

try {
    $bdd = new PDO('mysql:host=localhost;dbname=webcourses;charset=utf8', 'root', '');
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

// Récupération des données du formulaire
$email = $_POST['email'];
$mot_de_passe = $_POST['password'];

// Requête SQL pour vérifier les informations de connexion
$query = "SELECT * FROM utilisateur WHERE email = :email";
$statement = $bdd->prepare($query);
$statement->bindParam(':email', $email);
$statement->execute();
$user = $statement->fetch(PDO::FETCH_ASSOC);

if ($user) {
    if ($user['account_status'] == 0) { // Vérifier si le compte est inactif
        echo '<script>alert("Votre compte est inactif. Contactez l\'administrateur.");</script>';
        exit();
    }

    if ($user['login_attempts'] >= 5) { // Vérifier si le compte doit devenir inactif
        $sql = "UPDATE utilisateur SET account_status = 0 WHERE email = :email";
        $stmt = $bdd->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        echo '<script>alert("Trop de tentatives infructueuses. Contactez l\'administrateur.");</script>';
        exit();
    }

    // Vérification du mot de passe (non haché)
    if ($mot_de_passe === $user['password']) { // Assurez-vous que le nom de la colonne de mot de passe est correct
        // Réinitialiser le nombre d'essais infructueux en cas de connexion réussie
        $resetAttemptsQuery = "UPDATE utilisateur SET login_attempts = 0 WHERE email = :email";
        $resetAttemptsStatement = $bdd->prepare($resetAttemptsQuery);
        $resetAttemptsStatement->bindParam(':email', $email);
        $resetAttemptsStatement->execute();

        // Connexion réussie, enregistrez l'utilisateur dans une session
        $_SESSION['user_id'] = $user['id'];

        // Rediriger l'utilisateur vers la page de succès (par exemple, "fff.php")
        header("Location: fff.php");
        exit();
    } else {
        // Mot de passe incorrect, augmentez le nombre d'essais infructueux
        $incrementAttemptsQuery = "UPDATE utilisateur SET login_attempts = login_attempts + 1 WHERE email = :email";
        $incrementAttemptsStatement = $bdd->prepare($incrementAttemptsQuery);
        $incrementAttemptsStatement->bindParam(':email', $email);
        $incrementAttemptsStatement->execute();

        // Rediriger l'utilisateur vers la page "mot_de_passe_incorrect.php"
        header("Location: mot_de_passe_incorrect.php");
        exit();
    }
} else {
    // Identifiants incorrects, rediriger vers la page de connexion avec une erreur
    header("Location: index.php?error=1");
    exit();
}

?>
