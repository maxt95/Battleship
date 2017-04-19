<?php
    session_id('NAXJOBattleship');
    if (!isset($_SESSION)) {
        session_start();
    }
    $name = json_decode(file_get_contents("php://input"));
    $_SESSION[$name] = array($name, false); // Name, Kingvalue, add values for ship grid, points, etc.
    $_SESSION['Players'].$name.'\n';
?>