<?php

    //1시간후에 만료한다 
    $timeout = time()+3600; 
    //키, 값, 만료시간 
    
    $userid = $_POST['userid'];
    $password = $_POST['password'];
   
    if( $userid=='test' && $password=='1234'){
        setcookie('userid', $userid, $timeout);
        echo "<script>alert('로그온 성공');location.href='./loginForm.html';</script>";
    }else{
        echo "<script>alert('로그온 실패');location.href='./loginForm.html';</script>";
    }
  
?>