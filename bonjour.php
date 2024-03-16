<p>Bonjour à vous dans la version sans fonction isset() <?php echo $_GET['prenom'] . ' ' . $_GET['nom']
    . '!'; ?></p>

<?php


for ($i=0; $i < $_GET['repeter']; $i++)
{

    echo 'Bonjour à vous en ce beau matin avec répétition ' . $i . ' ' .
    $_GET['prenom'] . ' ' ; $_GET['nom'] . '!';
    echo '<br/>';
}

