<?php
    //post방식
    $userid = $_POST['userid'];
    $password = $_POST['password'];
   
    if( $userid=='test' && $password=='1234'){
        echo "{result:'success'}";
    }else{
        echo "{result:'fail'}";
    }
?>