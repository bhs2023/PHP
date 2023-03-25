<?php
    //get방식
    $xvalue = $_POST['xvalue'];
     
    echo "배열크기 : ".count($xvalue)."<br>";

    for ($i=0; $i<count($xvalue); $i++)
    {
        echo $xvalue[$i]."<br>";
    }
?>

