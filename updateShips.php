<?php
    session_id('NAXJOBattleship');
    if (!isset($_SESSION)) {
        session_start();
    }
    $name = json_decode(file_get_contents("php://input"));
    $ships = $_SESSION['Ships'];
    $result = 1;
    $x;
    $y;
    $finalArray;
    $count = 0;
    for($i = 0; $i < sizeof($ships); $i++) #check ship array
    {
        $x = $ships[$i][0];
        $y = $ships[$i][1];
        $owner = $ships[$i][3];
        if($name === $owner)
        {
            $status = $ships[$i][2];
            $status = (int)$status;
            if($status === 0)
            {
                $result = "sink";
                
                $array[0] = $x;
                $array[1] = $y;
                $array[2] = $result;
                $finalArray[$count] = $array;
                $count++;
            }
            
        }

    }

    echo json_encode($finalArray);
?>