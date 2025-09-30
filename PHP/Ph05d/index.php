

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ph05d</title>
</head>

<body>
 
<h1>ph05b : table de multiplication avec for, while et do..while</h1>
   
  <form action="index.php" method="POST">
    <label for="nombre">Nombre</label><br>
    <input type="text" id="nombre" name="nombre">
    <input type="submit" value="Submit">
   </form>
    
    <?php
      $nombre = $_POST["nombre"] ; // $_POST recupere le contenue du formulaure 
      
      function boucle ($nombre) {
        echo "<h2> Table de $nombre </h2>";  
        echo "<ul>";
        for ($i=1;$i<=10;$i++) {
        echo "<li>". $nombre. 'x'. $i . '=' . $nombre*$i."</li>";
      }
        echo "</ul>";

       
    }
 boucle($nombre); // ne pas mettre à l'interieur. 
?>



      

</body>

</html>