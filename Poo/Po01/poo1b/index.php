
<?php
 include "classe/voiture.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>poo01</title>
</head>
<body>
    <?php
        $voiture1 = new Voiture("voiture1");
        $voiture1->nom = "voiture1";
        $voiture1->marque = "Dacia";
        $voiture1->modele = "Logan";
        $voiture1->compteur = 0;
        $voiture1->demarrer();
        $voiture1->avancer(100);
        $voiture1->arreter();
        echo "<p>Le nom est " .$voiture1->nom."</p>";
        $voiture1->afficher();


        $voiture2 = new Voiture("voiture2"); 
        $voiture2->nom = "voiture2"; 
        $voiture2->marque = "renault";
        $voiture2->modele = "Megane"; 
        $voiture2->demarrer();
        $voiture2->avancer(200); 
        echo"<p>Le nom est " . $voiture2->nom."</p>";
        $voiture2->afficher();
     ?>
</body>
</html>