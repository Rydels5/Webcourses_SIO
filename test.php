 <?php
    if (isset($_GET['prenom']) AND isset($_GET['nom']) AND isset($_GET['repeter'])) 
    {
        
        $_GET['repeter'] = (int)$_GET['repeter'];

        if ($_GET['repeter'] == 0) 
        {
            echo 'la variable repeter vaut '.$_GET['repeter'].' car elle contenait du texte';

            echo '<br/>';
        }
        else 
        {
        if ($_GET['repeter'] >= 1 AND $_GET['repeter'] <= 12)
        {
            for ($i=0; $i < $_GET['repeter']; $i++)
                
            {
                echo 'Bonjour à vous en ce beau matin avec répétition'. $i.' '. $_GET['prenom'].' '.$_GET['nom']. '!';
                echo '<br/>';
            }

        }
        else 
        {
            echo 'Le nombre de répétition demandé de '. $_GET['repeter']. ' est trop élevé';
        }
    }
}
    
else
{
    echo 'Version 3 Les paramètres prenom et nom sont absents';
}