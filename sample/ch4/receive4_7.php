<?php
    //get방식
    $title = $_POST['title'];
    $writer = $_POST['writer'];
    $contents = $_POST['contents'];
   
    echo $title."<br>";
    echo $writer."<br>";
    echo "<br><br>---  nl2br 안썼을때 ----<br><br>";
    echo $contents;
    echo "<br><br>---  nl2br 썼을때 ----<br><br>";
    echo nl2br($contents);
?>

