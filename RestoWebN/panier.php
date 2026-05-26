<?php

session_start();

if (!isset($_SESSION["panier"])) {
    $_SESSION["panier"] = [];
}

if (!isset($_SESSION["commande"])) {
    $_SESSION["commande"] = [];
}

$prixTotalHT = 0;
$prixTotalTTC = 0;
$type_conso = "";

require_once "include/bdd_connexion.php";
$dbh = db_connect();

// Affichage de tous les produits
$sql = "SELECT * FROM produit";

try {
    $sth = $dbh->prepare($sql);
    $sth->execute();
    $all_produits = $sth->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Erreur lors de la récupération des produits" . $e->getMessage());
}


// Ajout des articles dans le panier
if (isset($_POST["add_panier"]) && isset($_POST["id_produit"])) {

    $id = $_POST["id_produit"] ?? null;

    $sql = "SELECT * FROM produit WHERE Id_produit = :Id_produit";
    $params = array(
        ":Id_produit" => $id
    );

    try {
        $sth = $dbh->prepare($sql);
        $sth->execute($params);
        $result = $sth->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die("Erreur lors de la récupération des produits" . $e->getMessage());
    }

    //Si article déjà présent incrémentation de la quantité
    if (isset($_SESSION["panier"][$id])) {
        $_SESSION["panier"][$id]["quantitee"]++;
        $_SESSION["panier"][$id]["prix_global"] = $_SESSION["panier"][$id]["quantitee"] * $_SESSION["panier"][$id]["prix_ht"];

    } else {
        $_SESSION["panier"][$id] = [
            "id_produit" => $id, 
            "libelle" => $result["libelle"],
            "prix_ht" => $result["prix_ht"],
            "quantitee" => 1,
            "prix_global" => $result["prix_ht"],
        ];
    }


    $type_conso = "";

    if (!empty($_SESSION["panier"])) {
        $type_conso = "
        <form action='' method='post'>
            <button name='type' value='1'>A emporter</button>
            <button name='type' value='2'>Sur place</button>
        </form>";
    }
}
    if(isset($_POST['type'])) {
        $_SESSION["commande"]["type"] = $_POST['type'];
    }

print_r($_SESSION["panier"]);

// Clear Session.
echo "<form action='' method='post'>";
echo "<input type='submit' name='clear_session' value='clear session'>";
echo "</form>";

if (isset($_POST["clear_session"])) {
    $_SESSION["panier"] = [];
    header("Location: panier.php");
    exit();
}

$prixTotalHT = array_sum(array_column($_SESSION["panier"], "prix_global"));

if (isset($_POST["type"])) {
    if ($_POST["type"] == "1") {
        $prixTotalTTC = $prixTotalHT * 1.05;
        $_SESSION['commande']['prixTotalTTC'] = $prixTotalTTC; 
    } elseif ($_POST["type"] == "2") {
        $prixTotalTTC = $prixTotalHT * 1.10;
        $_SESSION['commande']['prixTotalTTC'] = $prixTotalTTC; 
    }
}

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

    <a href="./index.php">Revenir à l'accueil</a> 
    
    <br>

    <?php if(isset($message)) { echo "<p>".$message."</p>"; } ?>


    <p>Liste des produits</p>
    <?php foreach ($all_produits as $row) { ?>
        <form action="" method="post">
            <input type='hidden' name='formulaire' value='liste_produit'>
            <input type="hidden" name="id_produit" value="<?= $row['Id_produit'] ?>">
            <?php echo "<p>" . $row["libelle"] . "</br>" . $row["prix_ht"] ?>
            <input type="submit" name="add_panier" value="Ajouter au panier">
        </form>
    <?php } ?>
    <h1>Récapitulatif panier</h1>
    <?php
    foreach ($_SESSION["panier"] as $recap) {
        echo "<p>" . $recap["quantitee"] . "x " . $recap["libelle"] . " " . $recap["prix_global"] . " €</p>";
    }
    ?>
    <p><em>Prix Total HT :</em>
        <?php
        if (empty($prixTotalHT)) {
            echo "00.00€";
        } else {
            echo $prixTotalHT;
        }
        ?>
    </p>

    <?php
    if (!empty($_SESSION["panier"])) {
        echo $type_conso;
    } else {
        $type_conso = "";
    }
    ?>

    <p><em>Prix Total TTC :</em>
        <?php
        if (empty($prixTotalTTC)) {
            echo "00.00€";
        } else {
            echo $prixTotalTTC;
        }
        ?>
    </p>
    <?php

        if(isset($_POST["type"])) {
            ?>
            <form action="./paiement.php" method="POST"><button>Payer la commande</button></form>
            <?php
        } 
        
        foreach($_SESSION["panier"] as $ligne){
            echo "<p> ID produit : ".$ligne["id_produit"]."<br> Quantitée :".$ligne["quantitee"]."<br> total ligne HT : ".$ligne["prix_global"]."</p>";
        }
    ?>
</body>

</html>