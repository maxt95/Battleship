<?php
	session_id('NAXJOBattleship');
    if (!isset($_SESSION)) {
        session_start();
    }

    $name = json_decode(file_get_contents("php://input"));
    $ship = $_SESSION['Ships'];
    $coord = [];
    if($ship[3] === $name)
    {
    	$coord = [$ship[0], $ship[1], $ship[2]]
    }
    echo json_encode($coord);

?>