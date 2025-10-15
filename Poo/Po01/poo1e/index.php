<?php
require_once('classe/voiture.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   $voiture1 = new Voiture("voiture1");
$voiture1->set_marque("Honda");
$voiture1->afficher();
$voiture2 = new Voiture("voiture2");
$voiture2->set_marque("Renault");
$voiture2->set_modele("Megane");
$voiture2->set_compteur(0);
$voiture2->demarrer();
$voiture2->avancer(-200); // On doit avancer de +200 km
$voiture2->arreter();
echo "<p>Mon nom est " . $voiture2->get_nom() . "</p>";
$voiture2->afficher();
    ?>
</body>
</html>