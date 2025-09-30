<?php
//
// ph25 - compteur de visites avec cookie 
// 
// gestions des cookies 
$nb=0; 
if (isset($_COOKIE["compteur"])) {
    // Lee cookie existe 
    $nb=$_COOKIE["compteur"]; 
    $nb++; 
    setcookie("compteur",$nb); 
} else {
    $nb=1;
    setcookie("compteur",$nb);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>ph25 - compteur de visites</h1>
    <h2>Page d'accueil</h2>
<ul> 
<li><a href="index.php" >Page d'accueil</a></li>
<li><a href="page2.php" >Page 2</a></li>
<li><a href="page3.php" >Page 3</a></li>
<li><a href="raz.php" >raz compteur</a></li>
</ul>
<p><?php echo $nb, ' visite(s) ' ?></p>
</body>
</html>