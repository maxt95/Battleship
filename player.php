<?php
    session_id('NAXJOBattleship');
    if (!isset($_SESSION)) {
        session_start();
    }

    echo json_encode($_SESSION['Name']);

?>