
<?php
require_once('./inc/noces.inc.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
        <tr>
            <th>Durée</th>
            <th>Nom</th>
        </tr>
        <?php
        foreach ($noces as $ind=>$value) {
            ?>
            <tr>
                <td><?= $ind ?></td>
                <td><?= $value ?></td>
            </tr>

            <?php
        }
        ?>
    </table>
    <p>Il y a <?= count($noces) ?> anniversaires</p>
</body>
</html>