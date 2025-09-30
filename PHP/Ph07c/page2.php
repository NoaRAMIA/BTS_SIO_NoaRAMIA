<?php
include "unc/polygone.inc.php"
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <a href="index.php">Lien vers index</a>

    <form action="page2.php" method="POST" > 
      <label for ="nombre" >Nombre </label><br>
      <input type="number" id="nombre" name="nombre">
      <input type="submit" value="Submit"> 
    </form>
 <?php
         if(isset($_POST["nombre"])) {
            $nbcote = $_POST["nombre"];

            foreach ($polygones as $cle => $nom){
              if ( $cle == $nbcote){
              echo "le polygone est : ". $nom; 
              }  
            }
          }
 

   ?>
</body>
</html>