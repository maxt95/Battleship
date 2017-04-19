<?php
    session_id('NAXJOBattleship');
    if (!isset($_SESSION)) {
        session_start();
    }
    elseif (isset($_SESSION)) {
        session_unset();
        session_start();
    }
    $stuff = json_decode(file_get_contents("php://input"));
    $kingName = $stuff->Name;
    $roomCode = $stuff->Code;
    $_SESSION[$kingName] = array($kingName, true); // add values for ship grid, points, etc.
    $_SESSION['RoomCode'] = $roomCode;
    $_SESSION['Players'] = $kingName.'\n';
    echo $_SESSION['Players'];
?>