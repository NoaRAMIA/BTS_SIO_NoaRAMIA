saisons_liste.php
<?php

/**
 * po24a : liste des saisons en tableau
 */
require_once "init.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>po24a</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>

<body>
  <h1>po24a - Saisons dans un tableau</h1>
  <?php include "menu.php";
  // Création du tableau des 4 saisons
  $saisons = array("printemps", "été", "automne", "hiver");
  // $saisons = ["printemps", "été", "automne", "hiver"];
  ?>
  <h2>Nombre de saisons</h2>
  <p>Il y a <?php echo count($saisons) ?> saison(s) dans le tableau</p>
  <h2>Seconde saison</h2>
  <p>la seconde saison est <mark><?php echo $saisons[1] ?></mark></p>

  <h2>Saisons dans un tableau HTML</h2>
  <table>
    <tr>
      <th>Index</th>
      <th>Libellé</th>
    </tr>
    <?php
    foreach ($saisons as $key => $saison) {
      echo "<tr>";
      echo "<td>" . $key . "</td>";
      echo "<td>" . $saison . "</td>";
      echo "</tr>";
    }
    ?>
  </table>

  <h2>Saisons dans une liste à puce</h2>
  <ul>
    <?php
    foreach ($saisons as $saison) {
      echo "<li>" . $saison . "</li>";
    }
    ?>
  </ul>
  <h2>Saisons contenant moins de 6 lettres dans une liste à puce</h2>
  <ul>
    <?php
    foreach ($saisons as $saison) {
      if (strlen($saison) < 6) {
        echo "<li>" . $saison . "</li>";
      }
    }
    ?>
  </ul>
  <h2>Saisons avec print_r()</h2>
  <?php
  echo "<pre>";
  print_r($saisons);
  echo "</pre>";
  ?>
</body>

</html>