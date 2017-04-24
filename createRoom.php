<?php
    session_id('NAXJOBattleship');
    if (isset($_SESSION)) {
        session_unset();
        session_destroy();
        session_start();
    }
    elseif (!isset($_SESSION)) {
        session_start();
    }
    $roomCode = file_get_contents("php://input");
    $_SESSION['RoomCode'] = $roomCode;
    $array = array();
    $array[0] = $roomCode;
    $_SESSION['Info'] = $array;
    echo $roomCode;
?>