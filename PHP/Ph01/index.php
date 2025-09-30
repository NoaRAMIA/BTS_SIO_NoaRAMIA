
<?php
//
// ph01 : doigts de la main
//
$doigts = [
  "le pouce :  celui qui sert à la préhension des objets",
  "l'index : celui qui montre la direction",
  "le majeur : celui qui est le plus grand",
  "l'annulaire : celui qui porte l'anneau",
  "l'auriculaire : celui qu'on met dans son oreille"
];

$titre = "ph01 : doigts de la main";

?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $titre ?></title>
</head>

<body>
  <h1><?= $titre ?></h1>
  <?php
  echo "<p>" . $doigts[rand(0, 4)] . "</p>";
  ?>
</body>

</html> 