<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ph06</title>
</head>
<body>
    <?php 
        $nombre ='3'; 
        $reste = 0 ;


    function calcul($nombre){
        $reste = $nombre % 2 ; 
        if ($reste == 0 ) {
            echo "$nombre est pair"; 
        } else {
            echo "$nombre est impair";
        }

    }

calcul(17) 





    ?>
    </body>
</html>