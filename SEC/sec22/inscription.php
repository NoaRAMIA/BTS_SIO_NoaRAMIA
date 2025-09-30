inscription.php
<?php
include "fonctions.inc.php";
session_start();

// Connexion à la base de données
$dbh = connexion();

// Récupère le contenu du formulaire
$login = isset($_POST['login']) ? $_POST['login'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$submit = isset($_POST['submit']);

// Ajoute le user
if ($submit) {
    $sql = "insert into user(login,password) values (:login,:password)";
    try {
        $sth = $dbh->prepare($sql);
        $sth->execute(array(
      ':login' => $login,
      ':password' => $password
    ));

    } catch (PDOException $ex) {
        die("Erreur lors de la requête SQL : ".$ex->getMessage());
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Squid - Inscription</title>
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <h1>Squid</h1>
  <h2>Inscription</h2>
  <p><img src="img/affiche_small (1).jpg" alt="affiche Squid Game"></p>
  <?php include("menu.inc.php"); ?>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <p>login<br /><input type="text" name="login" id="login" value="<?= $login ?>"></p>
    <p>password<br /><input type="password" name="password" id="password"></p>
    <p><input type="submit" name="submit" value="OK" /></p>
  </form>
  <p>Revenir à la page d'<a href="index.php">accueil</a></p>
</body>

</html>