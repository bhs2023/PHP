<?php

if(!isset($_COOKIE['mycookie'])) { // 해당 쿠키가 존재하지 않을 때
    echo "mycookie 라는 이름의 쿠키는 아직 생성되지 않았습니다.";

} else {                            // 해당 쿠키가 존재할 때

    echo $_COOKIE['mycookie']."<br>";
    echo $_COOKIE['name']."<br>";
    echo $_COOKIE['age']."<br>";
}
  
?>