index.php
<?php
function my_autoloader($classe) {
    include 'classes/'.$classe.'.php';
}
spl_autoload_register('my_autoloader');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Convertisseur</title>
</head>
<body>
<?php
try {
    $conv = new Convertisseur();

    // Cas 1 : 2 euros
    echo "<h2>Cas 1 : 2 euros</h2>";
    $e = 2;
    $d = $conv->euros2dollars($e);
    echo "<p>$e euros correspondent à $d dollars</p>";

    // Cas 2 : 7 dollars
    echo "<h2>Cas 2 : 7 dollars</h2>";
    $d = 7;
    $e = $conv->dollars2euros($d);
    echo "<p>$d dollars correspondent à $e euros</p>";

    // Cas 3 : taux = 1
    echo "<h2>Cas 3 : taux = 1</h2>";
    $conv->taux = 1.0;
    $e = 2;
    $d = $conv->euros2dollars($e);
    echo "<p>$e euros correspondent à $d dollars</p>";

    // Cas 4 : taux = 0
    echo "<h2>Cas 4 : taux = 0</h2>";
    $conv->taux = 0;
    $e = 2;
    $d = $conv->euros2dollars($e);
    echo "<p>$e euros correspondent à $d dollars</p>";

} catch (Exception $ex) {
    echo "<p>Erreur : " . $ex->getMessage() . "</p>";
}
echo "<p>C'est fini !</p>";
?>
</body>
</html>