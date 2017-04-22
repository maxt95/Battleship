<?php
    session_id('NAXJOBattleship');
    if (!isset($_SESSION)) {
        session_start();
    }
    $info = $_SESSION['NumPlayers'];

    echo json_encode($info);
?>