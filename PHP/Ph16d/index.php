
<?php
//
// ph16d : anniversaires de mariage avec une bd
//
include "functions/db_functions.php";
$nb = 60;

// Connexion à la base
$dbh = db_connect();

// Liste des anniversaires
$sql = 'select * from noces';
try {
  $sth = $dbh->prepare($sql);
  $sth->execute();
  $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  die("<p>Erreur lors de la requête SQL : " . $e->getMessage() . "</p>");
}

// Recherche l'anniversaire des $nb ans
$nom = "???";
foreach ($rows as $row) {
  if ($row['duree'] == $nb) {
    $nom = $row['lib_noces'];
  }
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/styles.css">
  <title>ph16d</title>
</head>

<body>
  <h1>ph16d - anniversaires de mariage avec une bd</h1>
  <h2>Liste des anniversaires</h2>
  <p><a href="page2.php">Rechercher</a> un anniversaire</p>
  <table>
    <tr>
      <th>Durée</th>
      <th>Nom</th>
    </tr>
    <?php
    foreach ($rows as $row) {
      echo "<tr><td>" . $row['id_noces'] . "</td><td>" . $row['lib_noces'] . "</td></tr>";
    }

    ?>
  </table>
  <p>Il y a <?php echo count($rows); ?> anniversaire(s)</p>
  <p><?php echo $nb; ?> année(s) de mariage correspondent aux noces de <?php echo $nom; ?></p>

</body>

</html>