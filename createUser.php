<?php
    session_id('NAXJOBattleship');
    if (!isset($_SESSION)) {
        session_start();
    }
	$name = $_SESSION[$name]
	echo json_encode($name);
    

?>