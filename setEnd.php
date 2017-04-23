<?php
    session_id('NAXJOBattleship');
    if (!isset($_SESSION)) {
        session_start();
    }
    $launch = file_get_contents("php://input");
    $_SESSION['EndGame'] = $launch;

    echo $_SESSION['EndGame'];
?>