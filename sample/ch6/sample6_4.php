<?php
    $conn = mysqli_connect( 'localhost', 'user01', '1234', 'mydb');
 
    $sql  = "insert into guestbook (title, contents, writer, wdate) values('새로운제목', '새로운내용', '새로운작성자', now())";

    mysqli_query($conn, $sql);

    header( 'Location: sample6_3.php' );
?>
