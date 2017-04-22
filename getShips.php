<?php
	session_id('NAXJOBattleship');
    if (!isset($_SESSION)) {
        session_start();
    }

    $name = json_decode(file_get_contents("php://input"));
    $index = (int)$name[1];
    $name = $name[0];
    
    $ship = $_SESSION['Ships'];
    $coord = [];

    $coord = [$ship[0], $ship[1], $ship[2], $ship[3], $ship[4]];
    
    $one = $ship;
    unset($ship[0]);
    $ship = array_values($ship);
    echo json_encode($one[$index]);
   
    

?>