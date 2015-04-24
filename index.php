<?php
ob_start();

session_start();

if (!isset($_SESSION['gametable'])) {
    $row = 3;
    $col = 3;
    $_SESSION['gametable'] = array();
    for ($i = 0; $i <= $row; $i++){
        for ($j = 0; $j <= $col; $j++){
            $_SESSION['gametable'][$i][$j] = 0;
        }
    }
}

include("core/functions.php");


?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lights out</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <table>
        <?php

        $row = 3;
        $col = 3;

        for ($i = 0; $i <= $row; $i++){
            echo "<tr>";
            for ($j = 0; $j <= $col; $j++){
                if ($_SESSION['gametable'][$i][$j] == 0) {
                    echo "<td><a href=\"index.php?row=$i&column=$j\"><img src=\"images/lightsout-uit.png\" alt=\"img\"/></a></td>";
                }
                elseif ($_SESSION['gametable'][$i][$j] == 1)
                {
                    echo "<td><a href=\"index.php?row=$i&column=$j\"><img src=\"images/lightsout-aan.png\" alt=\"img\"/></a></td>";

                }
            }
            echo "</tr>";
        }


        ?>
    </table>
    <h4><a href="index.php?restart=1">Nieuw spel</a></h4>

</body>
</html>



<?php
ob_flush();

?>