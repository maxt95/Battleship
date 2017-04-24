<?php
	session_id('NAXJOBattleship');
    if (!isset($_SESSION)) {
        session_start();
    }

    $array = json_decode(file_get_contents("php://input"));
    $name = $array[2];
    $ships = $_SESSION['Ships'];
    $inputX = $array[0];
    $inputY = $array[1];

    $result = "miss";
    $inputX = (int)$inputX;
    $inputY = (int)$inputY;
    
   	for($i = 0; $i < sizeof($ships); $i++)
   	{
   		$x = $ships[$i][0];
   		$y = $ships[$i][1];
   		$status = $ships[$i][2];
   		$status = (int)$status;
   		$owner = $ships[$i][3];
   		if($inputX === $x && $inputY === $y)
   		{
   			if($name != $owner)
   			{
   				if($status === 1)
   				{
   					$result = "hit";
   					$ships[$i][2] = 0;
   				}
   				
   			}
   			
   		}
   	}
   	$_SESSION['Ships'] = $ships;
    
    echo json_encode($result);

?>