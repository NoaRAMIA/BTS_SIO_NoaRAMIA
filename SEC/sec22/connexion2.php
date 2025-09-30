connexion.php
<?php
include "fonctions.inc.php";
session_start();

// Connexion à la base de données
$dbh = connexion();

$message = "";

// Récupère le contenu du formulaire
$login = isset($_POST['login']) ? $_POST['login'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

$submit = isset($_POST['submit']);

// Vérifie le user
if ($submit) {
  $sql = "select * from user where login='$login' and password='$password'";
  $params = array(
    ":login" => $login,
    ":password" => $password
  );
  try {
    $sth = $dbh->query($sql);
    $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
  } catch (PDOException $ex) {
    die("Erreur lors de la requête SQL : " . $ex->getMessage());
  }
  if (count($rows) != 0) {
    $_SESSION['login'] = $login;
    header("Location: episode_liste.php");
    exit();
  } else {
    $message = "login et/ou password invalide";
  }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Squid - Connexion</title>
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <h1>Squid</h1>
  <h2>Connexion</h2>
  <p><img src="img/affiche_small.jpg" alt="affiche Squid Game"></p>
  <?php include("menu.inc.php"); ?>
  <p><?= $message ?>
  </p>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <p>login<br /><input type="text" name="login" id="login" value="<?= $login ?>" required></p>
    <p>password<br /><input type="text" name="password" id="password" required></p>
    <p><input type="submit" name="submit" value="OK" /></p>
  </form>
  <p>Revenir à la page d'<a href="index.php">accueil</a></p>
</body>

</html>