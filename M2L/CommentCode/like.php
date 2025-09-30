<?php 
$sql_ligue = "UPDATE faq set nblike = nblike + 1  where id_faq = ";
    try {
        // Préparation et exécution de la requête
        $sth = $dbh->prepare($sql_ligue);
        $sth->execute([":id" => $_GET['id']]);
        // Récupération des données de la ligue
        $ligueData = $sth->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $ex) {
        // Gestion des erreurs de requête SQL
        die("Erreur lors de la requête SQL : " . $ex->getMessage());
    }