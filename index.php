<?php
ob_start();

session_start();
$row = 3;
$col = 3;



if (!isset($_SESSION['gametable'])) {

    $_SESSION['gametable'] = array();
    for ($i = 0; $i <= $row; $i++){
        for ($j = 0; $j <= $col; $j++){
            $_SESSION['gametable'][$i][$j] = 0;
        }
    }



    for($i = 0; $i < 10; $i++)
    {
        $randomPositionRow = mt_rand(0, $row);
        $randomPositionColumn = mt_rand(0, $row);

        do
        {
            $randomPositionRow = mt_rand(0, $row);
            $randomPositionColumn = mt_rand(0, $row);
        }
        while($_SESSION['gametable'][$randomPositionRow][$randomPositionColumn] == 1);



        $_SESSION['gametable'][$randomPositionRow][$randomPositionColumn] = 1;

    }

    $_SESSION['counter'] = 14;

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



        for ($i = 0; $i <= $row; $i++){
            echo "<tr>";
            for ($j = 0; $j <= $col; $j++){
                if ($_SESSION['gametable'][$i][$j] == 0) {
                    echo "<td><a href=\"index.php?row=$i&column=$j\"><img src=\"images/lightsout-uit.png\" alt=\"img\"/></a></td>";
                    $_SESSION['counter'] = $_SESSION['counter'] + 1;

                }
                elseif ($_SESSION['gametable'][$i][$j] == 1)
                {
                    echo "<td><a href=\"index.php?row=$i&column=$j\"><img src=\"images/lightsout-aan.png\" alt=\"img\"/></a></td>";
                    $_SESSION['counter'] = $_SESSION['counter'] - 1;

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
print_r($_SESSION['counter']);

ob_flush();

?>