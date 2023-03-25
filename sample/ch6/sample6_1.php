<?php
 
    //디비와의 접속 정보
    $servername = "localhost";  //서버 아이피
    $user = "user01";
    $password = "1234";
    $db = "mydb";
    //디비와 접속 
    $connect = mysqli_connect($servername, $user, $password, $db);
    if (!$connect) {
        die("서버와의 연결 실패! : ".mysqli_connect_error());
        //인수로 전달받은 메시지를 출력하고, 현재 실행 중인 PHP 스크립트를 종료
    }

    echo "서버와의 연결 성공!";

    mysqli_close($connect);  //꼭 기술하지 않아도 된다.
    
    echo "연결 종료";
?>
