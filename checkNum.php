<?php
    session_id('NAXJOBattleship');
    if (!isset($_SESSION)) {
        session_start();
    }
    $roomNum = $_SESSION['RoomCode'];
    $playerNum = json_decode(file_get_contents("php://input"));

    if ($roomNum == $playerNum) {
        echo json_encode(true);
    }
    else {
        echo json_encode(false);
    }
?>