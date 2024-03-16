<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=webcourses;charset=utf8', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo('Connexion réussie.');
} catch (Exception $e) {
    die('Erreur de connexion : ' . $e->getMessage());
}



try {
    
    $cok_type_consentement = $_POST['Type_consentement'];

    $cok_necessaire = isset($_POST['Necessaire']) ? 1 : 0;
    $cok_performance = isset($_POST['Performance']) ? 1 : 0;
    $cok_fonctionnalite = isset($_POST['Fonctionnalite']) ? 1 : 0;
    $cok_marketing = isset($_POST['Marketing']) ? 1 : 0;
    $cok_autres = isset($_POST['Autres']) ? 1 : 0;

    $req_id = $bdd->query('SELECT pe_id FROM personne ORDER BY pe_id DESC LIMIT 1');
    $pe_id = $req_id->fetch(PDO::FETCH_ASSOC)['pe_id'];

    $req = $bdd->prepare('INSERT INTO Consentement_cookie(cok_type_consentement, cok_necessaire, cok_performance, cok_fonctionnalite, cok_marketing, cok_autres, pe_id) VALUES(:Type_consentement, :Necessaire, :Performance, :Fonctionnalite, :Marketing, :Autres, :pe_id)');

    $req->execute(array(
        'Type_consentement' => $cok_type_consentement,
        'Necessaire' => $cok_necessaire,
        'Performance' => $cok_performance,
        'Fonctionnalite' => $cok_fonctionnalite,
        'Marketing' => $cok_marketing,
        'Autres' => $cok_autres,
        'pe_id' => $pe_id
    ));

    echo('Le cookie a bien été inséré : ' . htmlentities($_POST['Type_consentement']) . ' ' . $cok_necessaire . ' ' . $cok_performance . ' ' . $cok_fonctionnalite . ' ' . $cok_marketing . ' ' . $cok_autres);

} catch (Exception $e) {
    die('Erreur d\'insertion avec variable : ' . $e->getMessage());
}
?>
