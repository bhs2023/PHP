<?php
    //post방식
    $userid = $_POST['userid'];
    $password = $_POST['password'];
   
    if( $userid=='test' && $password=='1234'){
        echo "로그온 성공<br>";
    }else{
        echo "로그온 실패<br>";
    }
?>

