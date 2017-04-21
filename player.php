<?php
    session_id('NAXJOBattleship');
    if (!isset($_SESSION)) {
        session_start();
    }
    $name = $_SESSION['Info'];
    
    echo json_encode($name);

?>