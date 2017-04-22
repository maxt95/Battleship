<?php
	session_id('NAXJOBattleship');
    if (!isset($_SESSION)) {
        session_start();
    }

    $array = json_decode(file_get_contents("php://input"));
    echo json_encode($array[0]);

?>