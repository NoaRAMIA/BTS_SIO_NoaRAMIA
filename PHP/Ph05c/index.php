index.php
<?php
//
// ph05b : table de multiplication avec for, while et do..while
//

$nombre = 5;

?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ph05b</title>
</head>

<body>
  <h1>ph05b : table de multiplication avec for, while et do..while</h1>
  <h2>Table de <?= $nombre ?> </h2>
  <h3>avec une fonction </h3>
  
    <?php
    function boucle ($nombre) {
    echo "<h2> Table de $nombre </h2>";  
    echo "<ul>";
for ($i=1;$i<=10;$i++) {
  echo "<li>". $nombre. 'x'. $i . '=' . $nombre*$i."</li>";
}
echo "</ul>";
    }

    boucle(5) ; 
    boucle (3); 


?>



      

</body>

</html>