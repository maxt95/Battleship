<?php
    session_id('NAXJOBattleship');
    if (!isset($_SESSION)) {
        session_start();
    }
    $info = $_SESSION['Info'];

    echo json_encode($info);
?>