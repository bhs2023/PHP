<?php

    $time = 0;
    echo "타임스탬프는  " . date("Y/m/d", 0) . " 을 기점으로 합니다<br>";

    #2020-01-01의 timestamp값 
    #2020 - 1970 = 50년 = 50 * 365 * 24(시간) * 60(분) * 60(초) 
    #중간에 윤년이 있어서 정확하지 않음 4년에 한번씩 윤년이라 계산하면 
    #50년간 12.5일이 더 있다고 보고  
    $time = (50 * 365+12.5) * 24 * 60 * 60;
    echo $time."은 ". date("Y/m/d" , $time)."입니다 <br/>";

    $today = time();
    echo $today."<br/>";

    echo "오늘은 " . date("Y/m/d") . " 입니다<br>";
    echo "오늘은 " . date("Y.m.d") . " 입니다<br>";
    echo "오늘은 " . date("Y-m-d") . " 입니다<br>";
    echo "오늘은 " . date("Y-m-d H:i:s") . " 입니다<br>";
    echo "오늘은 " . date("l"). " 입니다<br>";  //오늘의 요일 
    
?>