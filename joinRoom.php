<?php
    session_id('NAXJOBattleship');
    if (!isset($_SESSION)) {
        session_start();
    }
    $name = json_decode(file_get_contents("php://input"));
    $_SESSION[$name] = array($name, false, 0, 4); // Name, Kingvalue, Points, and Lives
    $array = $_SESSION['Info'];
    $array[count($array)] = $name;
    $_SESSION['Info'] = $array;
    $numPlayers = $_SESSION['NumPlayers'];
    $_SESSION['NumPlayers'] = $numPlayers + 1;
    echo json_encode(array($name, false, 0, 4));

?>