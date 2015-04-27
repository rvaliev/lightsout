<?php

function switchLight($lightControl)
{
    if($lightControl == 1)
    {

        return $lightControl = 0;
    }
    elseif($lightControl == 0)
    {

        return $lightControl = 1;
    }

}


if (isset($_GET['row']) && isset($_GET['column'])) {
    $row = $_GET['row'];
    $col = $_GET['column'];

    $rowPlus = $row+1;
    $rowMin = $row-1;
    $colPlus = $col+1;
    $colMin = $col-1;

    $_SESSION['gametable'][$row][$col] = switchLight($_SESSION['gametable'][$row][$col]);
    $_SESSION['gametable'][$rowPlus][$col] = switchLight( $_SESSION['gametable'][$rowPlus][$col]);
    $_SESSION['gametable'][$rowMin][$col] = switchLight($_SESSION['gametable'][$rowMin][$col]);
    $_SESSION['gametable'][$row][$colPlus] = switchLight($_SESSION['gametable'][$row][$colPlus]);
    $_SESSION['gametable'][$row][$colMin] = switchLight($_SESSION['gametable'][$row][$colMin]);


    header("Location: index.php");

}


if(isset($_GET['restart']) && $_GET['restart'] == 1)
{
    $_SESSION = array();
    unset($_COOKIE[session_name()]);
    session_destroy();

    header("Location: index.php");

}