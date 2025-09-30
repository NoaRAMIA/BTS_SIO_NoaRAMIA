index.php
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php48</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>ph48 - Films Harry Potter à partir d'un fichier</h1>
    <h3>Liste des films Harry Potter dans un tableau</h3>
    <table>
        <tr>
            <th>Rang</th>
            <th>Titre</th>
        </tr>
    <?php
    $file=fopen('film.txt','r');
    $i = 1;
    while (!feof($file)) {

        $enreg=fgets($file);
        ?>
            <tr>
                <td><?=$i?></td>
                <td><?=$enreg?></td>
            </tr>
        <?php
        $i++;
    }
    
    ?>
    </table>

    <h3>Liste des films Harry Potter dans une liste à puce</h3>
    <ul>
            <?php
        $file=fopen('film.txt','r');

        while (!feof($file)) {
            $enreg=fgets($file);
            ?>
                <li>
                    <?=$enreg?>
                </li>
            <?php
        }
        
        ?>
    </ul>

</body>
</html>