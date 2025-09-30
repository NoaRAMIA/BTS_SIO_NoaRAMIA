<?php require_once('./calculatrice.php') ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
</head>
<body>
    <?php
    $calc= new Calculatrice();
    $nb1=2;
    $nb2=3;
    $resultat = $calc->add($nb1,$nb2);
    echo "<p>$nb1+$nb2=".$resultat."</p>";
    $resultat = $calc->substract($nb1,$nb2);
    echo "<p>$nb1-$nb2=".$resultat."</p>";
    $resultat = $calc->division($nb1,$nb2);
    echo "<p>$nb1/$nb2=".$resultat."</p>";
    $resultat = $calc->multiplication($nb1,$nb2);
    echo "<p>$nb1*$nb2=".$resultat."</p>";
    $resultat = $calc->division($nb1,0);
    echo "<p>$nb1/0=".$resultat."</p>";

    ?>
</body>
</html>