<?php
    //get방식
    $check = $_GET['check'];
     
    echo "배열크기 : ".count($check)."<br>";

    for ($i=0; $i<count($check); $i++)
    {
        echo $check[$i]."<br>";
    }
?>

