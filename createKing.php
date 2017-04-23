<?php
    session_id('NAXJOBattleship');
    if (!isset($_SESSION)) {
        session_start();
    }
    $kingName = file_get_contents("php://input");
    $_SESSION[$kingName] = array($kingName, true, (int)0, 4); // add values for ship grid, points, etc.
    $_SESSION['NumPlayers'] = 1;
    $array = $_SESSION['Info'];
    $array[count($array)] = $kingName;
    $_SESSION['Info'] = $array;
    $_SESSION['Launch'] = false;
    $_SESSION['InGame'] = false;

    echo $_SESSION['Info'];
?>