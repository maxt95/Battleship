<?php
    session_id('NAXJOBattleship');
    if (!isset($_SESSION)) {
        session_start();
    }
    $playerName = json_decode(file_get_contents("php://input"));

    if (isset($_SESSION[$playerName])) {
        echo json_encode(false);
    }
    else {
        echo json_encode(true);
    }
?>