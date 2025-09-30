<?php
$chaine = "l'élève a dépassé le maître";

// Nombre de caractères
$nbCaracteres = mb_strlen($chaine, 'UTF-8');

// Position de l'article "le"
$positionLe = mb_strpos($chaine, " le ", 0, 'UTF-8');

// Position du premier "é"
$positionE = mb_strpos($chaine, "é", 0, 'UTF-8');

// Nombre de "é"
$nbE = mb_substr_count($chaine, "é", 'UTF-8');

// Affichage des résultats
echo "Nombre de caractères : $nbCaracteres\n";
echo "Position de 'le' : $positionLe\n";
echo "Position du premier 'é' : $positionE\n";
echo "Nombre de 'é' : $nbE\n";
?>
