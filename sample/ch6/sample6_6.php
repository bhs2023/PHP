<?php
    $conn = mysqli_connect( 'localhost', 'user01', '1234', 'mydb');

    $title = $_GET["title"];
    $writer = $_GET["writer"];
    $contents = $_GET["contents"];
    $id = $_GET["id"];
    
    //1번 데이터를 업데이트 한다 
    //http://localhost:9000/sample/ch6/sample6_6.php?title=test1&writer=writer1&contents=contents1&id=1

    $sql  = "update guestbook set title = '$title', writer='$writer', contents='$contents' where id='$id' ";

    mysqli_query($conn, $sql);

    header( 'Location: sample6_3.php' );
?>
