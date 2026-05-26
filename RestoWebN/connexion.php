<?php
require_once("./include/bdd_connexion.php");

session_start();
if (isset($_POST["email"]) && isset($_POST["password"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM utilisateur WHERE email = :email";

    try {
        $stmt = $dbh->prepare($sql);
        $stmt->execute([":email" => $email]);
        $userData = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($userData && password_verify($password, $userData['password'])) {
            
            $_SESSION['user_id'] = $userData['Id_user'];
            $_SESSION['login'] = $userData['login'];
            $_SESSION['email'] = $userData['email'];
            
            $message = "Connexion réussie !";

            header("Location: index.php");
            exit();
        } else {
            $message = "Email ou mot de passe incorrect";
        }
    } catch (PDOException $ex) {
        die("ERREUR lors de la requête: " . $ex->getMessage());
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Connexion</title>
</head>
<body>
    <form action="" method="post">
        <input type="email" placeholder="Email" name="email">
        <input type="password" placeholder="Mot de passe" name="password">
        <button type="submit">Se connecter</button>
    </form>
    <?php if(isset($message)) { echo "<p>".$message."</p>"; } ?>
</body>
</html>