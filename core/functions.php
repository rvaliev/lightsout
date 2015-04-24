<?php


if (isset($_GET['row']) && isset($_GET['column'])) {
    $row = $_GET['row'];
    $col = $_GET['column'];

    $rowPlus = $row+1;
    $rowMin = $row-1;
    $colPlus = $col+1;
    $colMin = $col-1;

    $_SESSION['gametable'][$row][$col] = 1;
    $_SESSION['gametable'][$rowPlus][$col] = 1;
    $_SESSION['gametable'][$rowMin][$col] = 1;
    $_SESSION['gametable'][$row][$colPlus] = 1;
    $_SESSION['gametable'][$row][$colMin] = 1;


    function switchLight()
    {

    }


    header("Location: index.php");

}

/*echo "<pre>";
print_r($_SESSION['gametable']);
echo "</pre>";*/