<?php
    session_id('NAXJOBattleship');
    if (!isset($_SESSION)) {
        session_start();
    }

    
    $lives = $_SESSION['Lives'];
    $lives = $lives - 1;
    $_SESSION['Lives'] = $lives;

    echo json_encode($lives);
?>