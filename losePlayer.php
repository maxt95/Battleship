<?php
    session_id('NAXJOBattleship');
    if (!isset($_SESSION)) {
        session_start();
    }
    $launch = $_SESSION['NumPlayers'];
    $_SESSION['NumPlayers'] = $launch - 1;

    echo $_SESSION['NumPlayers'];
?>