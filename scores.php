<?php
    session_id('NAXJOBattleship');
    if (!isset($_SESSION)) {
        session_start();
    }
    $name = "php variable";
    echo json_encode($name);

?>