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
  <h3>avec for</h3>
  
    <?php
    echo "<ul>";
for ($i=1;$i<=10;$i++) {
  echo "<li>". $nombre. 'x'. $i . '=' . $nombre*$i."</li>";
}
echo "</ul>";
?>
 <br> 

 <h3> avec While </h3>    
    
    <?php
    $i = 1  ;
    while ($i <= 10) {
      echo "<li>". $nombre. 'x' . $i . '=' . $nombre*$i."</li>" ;
    $i++;
    } 

    ?>
    <br> 

    <h3> avec do while </h3>

    <?php 

    $i = 1 ;   

      do { 
        echo "<li>". $nombre. 'x' . $i . '=' . $nombre*$i."</li>" ;
        $i++;
      } 
      while ($i <= 10) ; 

    ?>
        



      

</body>

</html>