<?php
    session_id('NAXJOBattleship');
    if (!isset($_SESSION)) {
        session_start();
    }
    $_SESSION['Launch'] = "true";

    echo $_SESSION['Launch'];
?>