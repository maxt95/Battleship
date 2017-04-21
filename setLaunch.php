<?php
    session_id('NAXJOBattleship');
    if (!isset($_SESSION)) {
        session_start();
    }
    $launch = file_get_contents("php://input");
    $_SESSION['Launch'] = $launch;

    echo $_SESSION['Launch'];
?>