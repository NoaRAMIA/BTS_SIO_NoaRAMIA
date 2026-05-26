<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <a href="./connexion.php">Connexion</a> - <a href="./inscription.php">Inscription</a> 
    
    <?php
    if(isset($_SESSION["login"])) {
        ?>
        <a href="./deconnexion.php">Deconnexion</a>
        <?php
    }
    ?>
    <br>
    <?php
    if(isset($_SESSION["login"])) {
        echo $_SESSION["login"];
        echo " - ";
        echo $_SESSION["email"];
        echo " - ";
        echo $_SESSION["user_id"];
    }
    ?>

    <br>

    <a href="./panier.php">Passer commande</a>

    <?php if(isset($message)) { echo "<p>".$message."</p>"; } ?>


</body>

</html>