episode_liste.php
<?php
include "fonctions.inc.php";
session_start();

// Redirige vers la page de connexion si on n'est pas connecté
if (!isset($_SESSION['login'])) {
  header("Location: index.php");
  exit();
}


// Connexion à la base de données
$dbh = connexion();

// Liste des épisodes
$sql = "select * from episode order by saison, nr";
try {
  $sth = $dbh->query($sql);
  $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $ex) {
  die("Erreur lors de la requête SQL : " . $ex->getMessage());
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Squid - Liste des épisodes</title>
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <h1>Squid</h1>
  <h2>Liste des épisodes</h2>
  <p><img src="img/affiche_small (1).jpg" alt="affiche Squid Game"></p>
  <?php include("menu.inc.php"); ?>
  <table>
    <tr>
      <th>ID</th>
      <th>Saison</th>
      <th>Episode</th>
      <th>titre</th>
    </tr>
    <?php
    foreach ($rows as $row) {
      echo "<tr><td>" . $row['id_episode'] . '</td><td>' . $row['saison'] . '</td><td>' . $row['nr'] . '</td><td>' . $row['titre'] . '</td></tr>';
    }
    ?>
  </table>
  <p>Il y a <?= count($rows) ?> épisode(s)</p>
  <p>Revenir à la page d'<a href="index.php">accueil</a></p>
</body>

</html>