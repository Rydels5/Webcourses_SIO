<?php
session_start();

try {
    $bdd = new PDO('mysql:host=localhost;dbname=webcourses;charset=utf8', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Récupération de l'ID de la personne connectée
    $pe_id = isset($_SESSION['pe_id']) ? $_SESSION['pe_id'] : null;
    
    // Vérification si la personne existe dans la table `personne`
    if ($pe_id !== null) {
        $req = $bdd->prepare('SELECT COUNT(*) FROM personne WHERE pe_id = :pe_id');
        $req->execute(array('pe_id' => $pe_id));
        $count = $req->fetchColumn();
        
        if ($count === 1) {
            // Insertion des cookies acceptés dans la table `Consentement_cookie`
            $req = $bdd->prepare('INSERT INTO Consentement_cookie(cok_type_consentement, cok_necessaire, cok_performance, cok_fonctionnalite, cok_marketing, cok_autres, pe_id) VALUES(:Type_consentement, :Necessaire, :Performance, :Fonctionnalite, :Marketing, :Autres, :pe_id)');
            
            $req->execute(array(
                'Type_consentement' => 'Tous les cookies acceptés',
                'Necessaire' => 1,
                'Performance' => 1,
                'Fonctionnalite' => 1,
                'Marketing' => 1,
                'Autres' => 1,
                'pe_id' => $pe_id
            ));
            
            echo('Tous les cookies ont été acceptés.');
        } else {
            echo('La personne connectée n\'existe pas dans la base de données.');
        }
    } else {
        echo('Aucune personne connectée.');
    }

} catch (Exception $e) {
    die('Erreur de connexion : ' . $e->getMessage());
}
?>
