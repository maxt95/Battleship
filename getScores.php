<?php
    session_id('NAXJOBattleship');
    if (!isset($_SESSION)) {
        session_start();
    }
    $name = json_decode(file_get_contents("php://input"));
	$input = $_SESSION[$name];
	echo json_encode($input[2]);
    

?>