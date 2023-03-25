<?php
    class DBInfo
    {
        public static function getConnection(){
            $conn = mysqli_connect( 'localhost', 'user01', '1234', 'mydb');
            mysqli_query($conn, "set session character_set_connection=utf8;");
            mysqli_query($conn, "set session character_set_results=utf8;");
            mysqli_query($conn, "set session character_set_client=utf8;");
            return $conn;
        }
    }
?>