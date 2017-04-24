<?php
    session_id('NAXJOBattleship');
    if (!isset($_SESSION)) {
        session_start();
    }

    
    $lives = $_SESSION['Lives'];
    

    echo json_encode($lives);
?>