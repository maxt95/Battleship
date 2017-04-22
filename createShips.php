<?php
    session_id('NAXJOBattleship');
    if (!isset($_SESSION)) {
        session_start();
    }
    $array = json_decode(file_get_contents("php://input"));
    $_SESSION['Ships'] = $array;
    foreach($array as $a) {
        echo "\n";
        foreach($a as $b) {
            echo $b.', ';       # This accesses and iterates each element of the array
        }
    }
?>