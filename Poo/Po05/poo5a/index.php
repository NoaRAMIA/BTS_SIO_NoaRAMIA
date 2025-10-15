
<?php
//
// po05a : page d'accueil
//
include('ini.php');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>po05a : boissons</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>

<body>
  <h1>po05a : boissons</h1>
  <?php
    $boisson = new boisson("Perrier", 0.75);
$boisson->set_est_alcoolisee(false);
$boisson->set_categorie("biere");
$boisson->set_contenance(-1000);
$boisson->set_categorie("eau");
$boisson->afficher();
    ?>
</body>

</html>