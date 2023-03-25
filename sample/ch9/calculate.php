<?php
    $x = $_GET['x'];
    $y = $_GET['y'];
    $oper = $_GET['oper'];
    $result=0;
    if($oper=="1")
        $result = $x + $y;
    else if($oper=="2")
        $result = $x - $y;
    else if($oper=="3")
        $result = $x * $y;
    else 
        $result = $x / $y;
        
?>
{"result":"<?=$result?>"}