<?php 
include  "inc/polygones.inc.php"
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="main.css">
  <title>Ph07</title>
</head>
<body>
  <table> 
<tr> 
          <th> nombre cotés </th>
          <th> Nom </th>
          
</tr>
  <?php
  foreach ($polygones as $clé => $valeur){
   echo "<tr> 
          <td> $clé</td>
          <td> $valeur </td>
          </tr> ";
  


  }
  

?>
   </table>
</body>
</html>