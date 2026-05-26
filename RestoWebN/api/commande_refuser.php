<?php
require_once("../include/bdd_connexion.php");
$id = $_GET['id_commande'];
$dbh = db_connect();
$sql = "UPDATE commande SET  id_etat = 3 WHERE Id_commande = " . $id;
$stmt = $dbh->prepare($sql);
$stmt->execute();