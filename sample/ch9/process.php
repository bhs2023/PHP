<?php
    //post방식
    $title = $_POST['title'];
    $writer = $_POST['writer'];
    $contents = $_POST['contents'];
?>
{"title":"<?=$title?>", "writer":"<?=$writer?>", "contents":"<?=$contents?>"}