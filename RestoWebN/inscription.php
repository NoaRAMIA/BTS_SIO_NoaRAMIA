<?php
require_once("./include/bdd_connexion.php");

// Dès que le formulaire est soumis on vérifie que tous les champs ne sont pas vides
if (isset($_POST["login"]) && isset($_POST['email']) && isset($_POST["password"])) {
    
    // Vérification basique des champs
    if (empty($_POST["login"]) || empty($_POST['email']) || empty($_POST["password"])) {
        $message = "Erreur : tous les champs sont obligatoires";
    } else {
        try {
            // Vérifier que l'email n'existe pas déjà
            $sqlVerify = "SELECT COUNT(*) FROM utilisateur WHERE email = :email";
            $sthVerify = $dbh->prepare($sqlVerify);
            $sthVerify->execute(array(':email' => $_POST['email']));
            
            if ($sthVerify->fetchColumn() > 0) {
                $message = "Erreur : cet email est déjà utilisé";
            } else {
                // Hasher le mot de passe
                $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
                
                // Insérer en spécifiant les colonnes explicitement
                $sql = "INSERT INTO utilisateur (login, email, password) VALUES (:login, :email, :password)";
                $sth = $dbh->prepare($sql);
                $sth->execute(array(
                    ':login' => $_POST['login'],
                    ':email' => $_POST['email'],
                    ':password' => $hash
                ));
                
                $message = "Votre inscription a bien été prise en compte ! <a href='connexion.php'>Se connecter</a>";
            }
        } catch (PDOException $ex) {
            $message = "Erreur lors de la requête SQL : " . $ex->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Inscription</title>
</head>
<body>
    <form action="./inscription.php" method="POST">
        <input type="text" name="login" placeholder="Nom d'utilisateur">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Mot de passe">
        <button type="submit">Valider</button>
    </form>

    <?php if(isset($message)) { echo "<p>".$message."</p>"; } ?>


</body>
</html>