<?php
session_start();
require_once("include/bdd_connexion.php");

$sql = "INSERT INTO commande (id_etat, _date, total_commande, type_conso, id_user) VALUES (1,NOW(),:totalCommande, :typeCommande, :idUtilisateur)";

$params = [
    ":totalCommande" => $_SESSION['commande']['prixTotalTTC'],
    ":typeCommande"  => $_SESSION["commande"]["type"],
    ":idUtilisateur" => $_SESSION["user_id"]
];

try {
    $sth = $dbh->prepare($sql);
    $sth->execute($params);
    $idCommande = $dbh->lastInsertId();
} catch (PDOException $e) {
    die("Erreur lors de l'insertion de la commande : " . $e->getMessage());
}

foreach ($_SESSION["panier"] as $ligne) {
    $sql = "INSERT INTO `ligne_commande` (`qte`, `total_ligne_ht`, `Id_produit`, `Id_commande`) 
            VALUES (:qte, :totalLigneHT, :idProduit, :idCommande)";

    $params = [
        ":qte"          => $ligne["quantitee"],
        ":totalLigneHT" => $ligne["prix_global"],
        ":idProduit"    => $ligne["id_produit"],
        ":idCommande"   => $idCommande
    ];

    $sth = $dbh->prepare($sql);
    $sth->execute($params);
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
    <p>Paiement effectué avec succés !</p>
    <a href="index.php">Retour à la page index</a>
</body>
</html>