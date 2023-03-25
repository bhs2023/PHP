<?php
    
    echo time()."<br>";
    //오늘 날짜 확인하기     
    $today = date('Y-m-d H:i:s', time()); 
    echo "오늘은 ". $today."이다<br>";

    echo "<br><br>";
    echo "연도 : ". date("Y")."<br>";
    echo "월   : ". date("m")."<br>";
    echo "일   : ". date("d")."<br>";
    echo "요일 : ". date("l")."<br>";

    //한글 요일로 나타내고 싶을때는 w라는 형식을 사용한다. 
    //요일을 숫자로 0(일), 1(월), 2(화), 3(수), 4(목), 5(금), 6(토)일로 반환한다
    $weekday = ["일요일", "월요일", "화요일", "수요일", "목요일", "금요일", "토요일"];
    echo "요일 : ". $weekday[date("w")]."<br>";
    echo "말일 : ". date("t")."<br>";
       
?>