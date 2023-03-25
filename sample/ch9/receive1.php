<?php
    //post방식
    $userid = $_GET['userid'];
    $password = $_GET['password'];
   
    if( $userid=='test' && $password=='1234'){
        echo "{result:'success'}";
    }else{
        echo "{result:'fail'}";
    }
?>