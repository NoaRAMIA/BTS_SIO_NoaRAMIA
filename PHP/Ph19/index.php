<?php
$x = 10;
$y = 12;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php19</title>
    <style>
        table {
            border: 1px solid black;
            border-collapse: collapse;
            
        }
        td {
            width: 40px;
            height: 40px;
        }
        .black {
            background-color: black;
        }
    </style>
</head>
<body>
    <h1>Damier de <?= $x . "x" . $y ?></h1>
    <table>
    <?php

        for ( $i=1; $i <= $y; $i++) {
            $dam = $i / 2;

            if (is_float($dam)) {
                ?>
                <tr>
                    <?php
                    for ( $j=1; $j <= $x; $j++) {
                        $cond = $j / 2;
                        if (is_float($cond)) {
                            ?>
                            <td>&nbsp;</td>
                            <?php
                        } else {
                            ?>
                            <td class="black">&nbsp;</td>
                            <?php
                        }
                    }
                    ?>
                <tr>
                <?php
            } else {
                ?>
                <tr>
                    <?php
                    for ( $j=1; $j <= $x; $j++) {
                        $cond = $j / 2;
                        if (is_float($cond)) {
                            ?>
                            <td class="black">&nbsp;</td>
                            <?php
                        } else {
                            ?>
                            <td>&nbsp;</td>
                            <?php
                        }
                    }
                    ?>
                <tr>
                <?php
            }

            ?>

            <?php
        }

    ?>
    </table>

</body>
</html>