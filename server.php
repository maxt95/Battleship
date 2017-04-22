<?php
	session_id('NAXJOBattleship');
    if (!isset($_SESSION)) {
        session_start();
    }

    $array = json_decode(file_get_contents("php://input"));
    $ship = $_SESSION['Ships'];
    echo json_encode($ship);

?>