<?php
    //세션은 이용하기전에 session_start() 함수를 호출해 주어야 하며, 호출이전에 어떤 내용도 브라우저로 출력되서는 안된다.
    session_start ();
    
    $userid = $_POST['userid'];
    $password = $_POST['password'];
   
    if( $userid=='test' && $password=='1234'){
        $_SESSION['userid']=$userid; 

        echo "<script>alert('로그온 성공');location.href='./loginForm2.html';</script>";
    }else{
        echo "<script>alert('로그온 실패');location.href='./loginForm2.html';</script>";
    }
  
?>