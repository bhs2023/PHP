<?php
  
    $reg = "/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i";
    $email="littleconan@hanmail.net";
    $check_email=preg_match($reg, $email);

    if($check_email==true)
    {
        echo "올바른 이메일 형식입니다.<br>";
    }
    else
    {
        echo "잘못된 이메일 형식입니다.<br>";
    }

    //php 5.21부터 작동한다 
    $email="littleconan@hanmail.net";
    $check_email=filter_var($email, FILTER_VALIDATE_EMAIL);

    if($check_email==true)
    {
        echo "올바른 이메일 형식입니다.<br>";
    }
    else
    {
        echo "잘못된 이메일 형식입니다.<br>";
    }
?>