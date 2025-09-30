<?php
    include "function.php";
    $rows = rqsql("SELECT * FROM pays");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>ph20c</title>
</head>
<body>
    <table>
        <tr><th>Code</th><th>Nom</th><th>Capitale</th><th>Drapeau</th><th>Action 1</th><th>Action 2</th></tr>
    <?php
    foreach($rows as $row) {
        echo "<tr>";
        echo "<td>" .$row["code"]. "</td>";
        echo "<td>" .$row["nom_fr"]. "</td>";
        echo "<td>" .$row["capitale"]. "</td>";
        echo '<td><img src="img/' .strtolower($row["code"]).'.png" alt="drapeau"></td>';
        echo '<td><a href="pays_modifier.php?id_pays=' .$row["id_pays"].'">Modifier</a></td>';
        echo '<td><a href="pays_supprimer.php?id_pays=' .$row["id_pays"].'">Supprimer</a></td>';
        echo "</tr>";
    }


    ?>
    </table>
</body>
</html>