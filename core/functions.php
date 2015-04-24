<?php


if (isset($_GET['row']) && isset($_GET['column'])) {
    $row = $_GET['row'];
    $col = $_GET['column'];

    $rowPlus = $row+1;
    $rowMin = $row-1;
    $colPlus = $col+1;
    $colMin = $col-1;

    $_SESSION['gametable'][$row][$col] = 1;

    if ((($rowMin >= 0) || ($colMin >= 0)) && (($rowMin <= 3) || ($colMin <= 3))) {
        $_SESSION['gametable'][$rowPlus][$col] = 1;
        $_SESSION['gametable'][$rowMin][$col] = 1;
        $_SESSION['gametable'][$row][$colPlus] = 1;
        $_SESSION['gametable'][$row][$colMin] = 1;
    }
    elseif($row == 0 && $col == 0)
    {
        $_SESSION['gametable'][$rowPlus][$col] = 1;
        $_SESSION['gametable'][$row][$colPlus] = 1;
    }




    /*$_SESSION['gametable'][$row][$col] = 1;
    $_SESSION['gametable'][$rowPlus][$col] = 1;
    $_SESSION['gametable'][$rowMin][$col] = 1;
    $_SESSION['gametable'][$row][$colPlus] = 1;
    $_SESSION['gametable'][$row][$colMin] = 1;*/

    header("Location: index.php");

}

/*echo "<pre>";
print_r($_SESSION['gametable']);
echo "</pre>";*/