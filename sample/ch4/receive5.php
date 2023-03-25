<?php
    //get방식
    $x = $_GET['x'];
    $y = $_GET['y'];
    $oper = $_GET['oper'];

     
    if($oper=="1")
    {
        echo $x." + ".$y." = ". ($x+$y). "<br>";
    }
    else if($oper=="2")
    {
        echo $x." - ".$y." = ". ($x-$y). "<br>";
    }
    else if($oper=="3")
    {
        echo $x." * ".$y." = ". ($x*$y). "<br>";
    }
    else 
    {
        echo $x." / ".$y." = ". ($x/$y). "<br>";
    }
?>

