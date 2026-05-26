<?php
require_once("../include/bdd_connexion.php");

    $dbh = db_connect();

    $sql = "SELECT 
                commande.Id_commande, 
                commande._date, 
                commande.id_etat, 
                commande.total_commande,
                COUNT(ligne_commande.Id_Produit) AS nbProduits
            FROM commande 
            JOIN utilisateur 
                ON commande.Id_user = utilisateur.Id_user
            JOIN ligne_commande 
                ON ligne_commande.Id_commande = commande.Id_commande
            WHERE commande.id_etat = 1
            GROUP BY 
                commande.Id_commande, 
                commande._date, 
                commande.id_etat, 
                commande.total_commande";
    
    $tableau = [];
   
    $sth = $dbh->prepare($sql);
    $sth->execute();
    $commandes = $sth->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($commandes as $commande) {
        $tableau[] = [
            "id" => $commande['Id_commande'],
            "date" => $commande['_date'],
            "prix" => $commande['total_commande'],
            "etat" => $commande['id_etat'],
            "nbProduits" => $commande['nbProduits']
        ];
    }

    $json = json_encode($tableau);
    echo $json;
?>