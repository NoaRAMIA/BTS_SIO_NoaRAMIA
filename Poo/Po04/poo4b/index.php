
<?php
//
// po04 : compte bancaire
//
include('init.php');
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <title>po04 : comptes bancaires</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
  </head>
  <body>
    <h1>po04 : comptes bancaires</h1>
    <?php
    // Premier compte
    $compte1 = new Compte("Bill Gates",500);
    $compte1->afficher();
    $compte1->crediter(100);
    $compte1->crediter(200);
    $compte1->debiter(10000);
    $compte1->afficher();
    // Second compte
    $compte2 = new Compte("Donald Trump",100);
    $compte2->set_devise("F");
    $compte2->set_devise("$");
    $compte2->afficher();
    $compte2->crediter(500);
    $compte2->crediter(-200);
    $compte2->debiter(50);
    $compte2->afficher();
    // DEstruction
    $compte1 = NULL;
    $compte2 = NULL;
    ?>
  </body>
</html>