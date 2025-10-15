<?php 

include("init.php")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>poo41a</title>
</head>
<body>
    <?php
    // Instanciation de la classe
    try{
// Instanciation de la classes
$conv = new Convertisseur();
// 2 euros
echo "<h2>Cas 1 : 2 euros</h2>";
$e = 2;
$d = $conv->euros2dollars($e);
echo "<p>$e euros correspondent à $d dollars</p>";
// 7 dollars
echo "<h2>Cas 2 : 7 dollars</h2>";
$d = 7;
$e = $conv->dollars2euros($d);
echo "<p>$e euros correspondent à $d dollars</p>";
// Taux = 1
echo "<h2>Cas 3 : taux = 1</h2>";
$conv->taux = 1.0;
$e = 2;
$d = $conv->euros2dollars($e);
echo "<p>$e euros correspondent à $d dollars</p>";
// Taux = 0
echo "<h2>Cas 4 : taux = 0</h2>";
$conv->taux = 0;
$e = 2;
$d = $conv->euros2dollars($e);
echo "<p>$e euros correspondent à $d dollars</p>";
} catch (\Exception $ex) {
echo "<p>Erreur : " . $ex->getMessage() . "</p>";
}
echo "<p>C'est fini ! </p>";
?>
</body>
</html>
