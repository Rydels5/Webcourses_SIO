<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=webcourses;charset=utf8', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo("<p id='reussi'>Connexion réussie !</p><br/>");
} catch (Exception $e) {
    die('Erreur de connexion : ' . $e->getMessage());
}

try {
    if (
        !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['adresse']) && !empty($_POST['tel']) && !empty($_POST['email'])
        && !empty($_POST['password']) && !empty($_POST['pseudo']) && !empty($_POST['datenais']) && !empty($_POST['sexe']) && !empty($_POST['type_participant'])
    ) {
        // Récupération des valeurs du formulaire
        $pe_nom = htmlspecialchars(addslashes($_POST['nom']));
        $pe_prenom = htmlspecialchars(addslashes($_POST['prenom']));
        $pe_adresse = htmlspecialchars(addslashes($_POST['adresse']));
        $pe_tel = htmlspecialchars(addslashes($_POST['tel']));
        $mem_email = htmlspecialchars(addslashes($_POST['email']));
        $mem_pseudo = htmlspecialchars(addslashes($_POST['pseudo']));
        $mem_password = htmlspecialchars(addslashes($_POST['password']));
        $co_datenais = htmlspecialchars(addslashes($_POST['datenais']));
        $co_sexe = htmlspecialchars(addslashes($_POST['sexe']));
        $type_participant = htmlspecialchars(addslashes($_POST['type_participant'])); // Nouvelle variable pour le type de participant
        
        // Hash the password
        $hashed_password = password_hash($mem_password, PASSWORD_DEFAULT);

        // Insertion dans la table personne
        $req1 = $bdd->prepare('INSERT INTO personne (pe_nom, pe_prenom, pe_adresse, pe_tel) VALUES (:nom, :prenom, :adresse, :tel)');
        $req1->execute(array(
            'nom' => $pe_nom,
            'prenom' => $pe_prenom,
            'adresse' => $pe_adresse,
            'tel' => $pe_tel
        ));

        // Récupération de l'ID de la nouvelle personne
        $person_id = $bdd->lastInsertId();

        // Insertion dans la table membre
        $req2 = $bdd->prepare('INSERT INTO membre (email, password, pseudo, pe_id) VALUES (:email, :password, :pseudo, :pe_id)');
        $req2->execute(array(
            'email' => $mem_email,
            'password' => $hashed_password,
            'pseudo' => $mem_pseudo,
            'pe_id' => $person_id
        ));

        // Récupération de l'ID du membre
        $membre_id = $bdd->lastInsertId();

        // Insertion dans la table amateur
        // Si le type de participant est amateur, type_categorie prend la valeur 1, sinon 2
        $type_categorie = ($type_participant == 'amateur') ? 1 : 2;
        $req3 = $bdd->prepare('INSERT INTO amateur (id_utilisateur, pe_id, date_debut_amateurisme, type_categorie) VALUES (:id_utilisateur, :pe_id, NOW(), :type_categorie)');
        $req3->execute(array(
            'id_utilisateur' => $membre_id,
            'pe_id' => $person_id, // Utilisation de l'ID de la personne pour la colonne pe_id
            'type_categorie' => $type_categorie
        ));

        echo('<p id="new">Le nouveau utilisateur a bien été
        enregistré avec les données suivantes : </p>'.'<p id="nouveau">Le nouveau nom : ' .$_POST['nom'].   
        /*faire des modifs pour rendre en html bien */
        '<br/> Le nouveau prénom : '.$_POST['prenom'].' <br/>La nouvelle adresse : '.$_POST['adresse'].' <br/>Le nouveau téléphone : '.$_POST['tel'].'<br>Le nouveau pseudo :  '.$_POST['pseudo'].' 
        <br/>Le nouveau e-mail : '.$_POST['email'].' <br/>La nouvelle date de naissance : '.$_POST['datenais'].' <br/>Le nouveau sexe : '.$_POST['sexe'].' <br/>Le type de participant : '.$_POST['type_participant'].' </p>'); 
    }

 
    else {
        echo "Veuillez remplir tous les champs obligatoires.";
    }
} catch (Exception $e) {
    die('Erreur d\'insertion ou enregistrement déjà existant : ' . $e->getMessage());
}
?>
