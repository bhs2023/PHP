<?php
    echo "<br>두 날자사이의 간격<br>";
    $date1 = '2020-06-25';
    $date2 = '2020-06-30';

    $oneday_sec = 24*60*60; //하루를 초로 나타냄 
    $diff = strtotime($date2) - strtotime($date1);  //초로 나온다. 
    echo $date1. " ~ ". $date2. " = ". $diff/$oneday_sec."<br>";

     
    echo "오늘부터 이달 말일까지의 남은 일수 구하기<br>";
    $today_date = date('Y-m-d');
    $last_date = date('Y-m-t');  //해당월의 마지막날을 구한다 
    
    $diff = strtotime($last_date) - strtotime($today_date);  //초로 나온다. 
    echo $last_date. " ~ ". $today_date. " = ". $diff/$oneday_sec."<br>";
      
?>


