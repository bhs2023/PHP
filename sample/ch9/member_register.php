<?php
    $userid = $_POST['userid'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
?>
{   "result":"success", 
    "userinfo":{"userid":"<?=$userid?>", 
                "username":"<?=$username?>",
                "password":"<?=$password?>",
                "email":"<?=$email?>"}
}
