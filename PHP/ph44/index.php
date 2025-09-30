<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $file = fopen("files/cantons.csv", "r") or exit("<p>Impossible de lire le
    fichier</p>");
    while (!feof($file)) {
        $row=fgetcsv($file, 0, ',');
        echo "<ul>";
        foreach ($row as $value) {
            echo "<li>".$value."</li>";
        }
        echo "</ul>";
    }
    fclose($file);
    ?>
</body>
</html>