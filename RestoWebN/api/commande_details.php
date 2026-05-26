<?php
require_once("../include/bdd_connexion.php");

    $dbh = db_connect();
    $id = $_GET['id_commande'];

    $sql = "SELECT produit.libelle, ligne_commande.qte, ligne_commande.total_ligne_ht
            FROM ligne_commande 
            JOIN produit  ON ligne_commande.Id_produit = produit.Id_produit
            WHERE ligne_commande.Id_commande = :id";

    $sth = $dbh->prepare($sql);
    $sth->execute([':id' => $id]);
    $lignes = $sth->fetchAll(PDO::FETCH_ASSOC);

    $tableau = [];
    foreach ($lignes as $ligne) {
        $tableau[] = [
            "libProduit"          => $ligne['libelle'],
            "qteCommandee"        => $ligne['qte'],
            "prixHtLigneCommande" => $ligne['total_ligne_ht']
        ];
    }

    echo json_encode($tableau);
?>