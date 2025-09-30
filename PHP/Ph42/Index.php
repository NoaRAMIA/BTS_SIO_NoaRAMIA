<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ph42</title>
</head>
<body>
<?php
$planetes = array(
    "Mercure",
    "Vénus",
    "Terre",
    "Mars",
    "Jupiter",
    "Saturne",
    "Uranus",
    "Neptune"
);

// Affichage de la liste des planètes sous forme de tableau HTML
echo "<table border='1'>";
echo "<tr><th>#</th><th>Planète</th></tr>";

foreach ($planetes as $index => $planete) {
    echo "<tr><td>" . $index . "</td><td>" . $planete . "</td></tr>";
}

echo "</table>";

// Affichage du nombre de planètes
echo "<p>Nombre de planètes : " . count($planetes) . "</p>";

// Affichage de la troisième planète (indice 2)
echo "<p>La troisième planète est : " . $planetes[2] . "</p>";

// Affichage de la dernière planète (indice 7)
echo "<p>La dernière planète est : " . $planetes[count($planetes) - 1] . "</p>";
?>

</body>
</html>