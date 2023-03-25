<?php

$servername = "localhost";
$username = "user01";
$password = "1234";
$dbname = "mydb";

// 연결하기
$conn = mysqli_connect( 'localhost', 'user01', '1234', 'mydb');

$sql  = "insert into guestbook (title, contents, writer, wdate) values(?,?,?, now())";
$stmt = $conn->prepare($sql);

$title = "새로운 글을 등록해보자";
$writer = "지은이";
$contents = "파라미터를 이용해보자";

//sss - 데이터 타입, 문자열3개를 파라미터로 전달 한다는 의미임 
$stmt->bind_param('sss', $title, $writer, $contents);

$stmt->execute();

$stmt->close();
$conn->close();

header( 'Location: sample6_3.php' );
?>
