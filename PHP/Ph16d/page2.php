
<?php
//
// ph16d : anniversaires de mariage avec une bd
//
include "functions/db_functions.php";

// Récupère le contenu du formulaire
$submit = isset($_POST['submit']);
$nb = isset($_POST['nb']) ? $_POST['nb'] : 0;
$nb = (int) $nb;  // Force à 0 si ce n'est pas numérique

$reponse = ''; // Par défaut on n'affiche pas de réponse

// Formulaire soumis ?
if ($submit) {
  // Connexion à la base
  $dbh = db_connect();
  // L'anniversaire existe dans la BD ?
  $sql = 'select * from noces where id_noces = :id_noces';
  $params = array(
    ':id_noces' => $nb
  );
  try {
    $sth = $dbh->prepare($sql);
    $sth->execute($params);
    $row = $sth->fetch(PDO::FETCH_ASSOC);
  } catch (PDOException $e) {
    die("<p>Erreur lors de la requête SQL : " . $e->getMessage() . "</p>");
  }
  if ($row != FALSE) {
    $reponse = $nb . " année(s) de mariage correspondent aux noces de " .  $row['lib_noces'];
  } else {
    $reponse = 'Je ne connais pas cet anniversaire de mariage, désolé !';
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
  <h2>Recherche d'un anniversaire</h2>
  <p>Revenir à l'<a href="index.php">accueil</a></p>
  <table>
    <form action="page2.php" method="post">
      <p>Durée<br />
        <input type="text" name="nb" value="<?php echo $nb; ?>" placeholder="Le nombre d'années">
      </p>
      <p><input type="submit" name="submit" value="OK"></p>
    </form>
    <p><?= $reponse; ?></p>
</body>

</html>