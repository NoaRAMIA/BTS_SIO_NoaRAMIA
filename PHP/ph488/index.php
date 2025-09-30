<?php 
    $file = fopen("files/films.txt","r")or exit ("<p> Impossible d'ouvrir le fichier </p>");
    $enreg = fgets($file);
    $films = file("files/films.txt");   
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>ph48</title>
</head>
<body>
    <h1>ph48 : Films Harry Potter à partir d'un fichier</h1>
    <h2>Liste des films Harry Potter dans un tableau</h2>
    <table>
        <tr>
            <th>Rang</th>
            <th>Titres</th>
        </tr>
    <?php
    foreach($films as $cle => $film) {
        echo "<tr><td>".($cle + 1)."</td><td>".$film."</td></tr>";
    }
    
    ?>
    </table>
    <h2>Liste des films Harry Potter dans une liste à puces</h2>
    <ul>
    <?php
    foreach($films as $film) {
        echo "<li>".$film."</li>";
    }
    fclose($file);
    
    ?>
    </ul>
    <?php
    echo "<p> Il y a ".count($films)." films</p>";
    ?>
</body>
</html>