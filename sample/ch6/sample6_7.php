<?php
    $conn = mysqli_connect( 'localhost', 'user01', '1234', 'mydb');

    $id = $_GET["id"];
    
    //1번 데이터를 삭제한다 
    //http://localhost:9000/sample/ch6/sample6_7.php?id=1

    $sql  = "delete from guestbook  where id='$id' ";

    mysqli_query($conn, $sql);

    header( 'Location: sample6_3.php' );

?>
