<?php
    
    //디비와의 접속 정보
    $servername = "localhost";
    $user = "user01";
    $password = "1234";
    $db = "mydb";
    //디비와 접속 
    $connect = mysqli_connect($servername, $user, $password, $db);
    if (!$connect) {
        die("서버와의 연결 실패! : ".mysqli_connect_error());
        //인수로 전달받은 메시지를 출력하고, 현재 실행 중인 PHP 스크립트를 종료
    }

    $sql = "SELECT * FROM guestbook";
    $result = mysqli_query($connect, $sql);
   
   var_dump($result); //
    var_dump($result->num_rows);

    while($row = mysqli_fetch_array($result)) {
        print_r($row);    
        echo '<br>';
    }
   
    mysqli_close($connect);
?>
