<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ph07</title>
</head>
<body>
  <?php
  $nombre = 12; 
  $nom = "" ; 


  function triangle ($nombre){   
        if ($nombre == 3) {
          $nom = " triangle" ;
          return $nom ; 
        } elseif ($nombre == 4){
                  $nom = "Quadrilatere";
          return $nom ;
        } elseif ($nombre == 5){
                  $nom = "Pentagone";
          return $nom;
        } elseif ($nombre == 6){
                  $nom = "Hexagone"; 
          return $nom ; 
        } elseif ($nombre == 8) {
                  $nom = " Octogone";
          return $nom ; 
        } elseif ($nombre == 12){
                  $nom = "dodecagone";
        } else  
                $nom = "autre";
          return $nom ; 

  }
 echo "ce polygone est " . triangle ($nombre) . " a $nombre cotés " ; 















?>
  
</body>
</html>