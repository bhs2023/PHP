<?php
    $conn = mysqli_connect( 'localhost', 'user01', '1234', 'mydb');

    $title = $_GET["title"];
    $writer = $_GET["writer"];
    $contents = $_GET["contents"];
    
    //http://localhost:9000/sample/ch6/sample6_5.php?title=새로운내용2&writer=작성자2&contents=내용2

    $sql  = "insert into guestbook (title, contents, writer, wdate) values('$title', '$writer', '$contents', now())";

    mysqli_query($conn, $sql);

    header( 'Location: sample6_3.php' );
?>
