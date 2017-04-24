<?php
    session_id('NAXJOBattleship');
    if (!isset($_SESSION)) {
        session_start();
    }
    $name = json_decode(file_get_contents("php://input"));
	$input = $_SESSION[$name];
	$array = [$name, $input[2]];
	echo json_encode($array);
    
?>