<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<h1>Exemple de boucle for en PHP</h1>
<?php
$nombre = 5 ;

echo "<ul>"; {
  echo "<li>".$nombre."x". '1 = ' . $nombre*1;
  echo "<li>".$nombre."x". 2 . '=' . $nombre*2;
  echo "<li>".$nombre."x". 3 . '=' . $nombre*3;
  echo "<li>".$nombre."x". 4 . '=' . $nombre*4;
  echo "<li>".$nombre."x". 5 . '=' . $nombre*5;
  echo "<li>".$nombre."x". 6 . '=' . $nombre*6;
  echo "<li>".$nombre."x". 7 . '=' . $nombre*7;
  echo "<li>".$nombre."x". 8  . '=' . $nombre*8;
  echo "<li>".$nombre."x". 9 . '=' . $nombre*9; 
  echo "<li>".$nombre."x". 10 . '=' . $nombre*10; 
}
echo "</ul>";
?>
</body>
</html>