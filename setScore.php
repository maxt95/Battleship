<?php
    session_id('NAXJOBattleship');
    if (!isset($_SESSION)) {
        session_start();
    }
    $name = json_decode(file_get_contents("php://input"));
    
    
    $input = $_SESSION[$name];

   	$input[2] = $input[2] + 1;
    
	$_SESSION[$name] = $input;
	echo json_encode($input[2]);
    

?>