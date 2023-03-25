<?php
    echo "<br><br>";
    $base_date = '2020-07-05'; //기준이 되는 날짜
    $timedate = strtotime($base_date); //문자열을 컴퓨터가 인식할 수 있는 시간형식으로 변환    echo date('Y- m월 d일',$str_date); //날짜 변환

    //하루일자 더하기 
    echo "기준일자 : ".$base_date."<br>";
    echo "기준일자의 타임스탬프 ".$timedate."<br>";
    $timedate = strtotime($base_date.'+7 day'); // +1 days로 하루를 더함
    echo "기준일자 하루후 ".date('Y-m-d',$timedate)."<br>"; //변환된 날짜 출력
    echo "기준일자 하루전 ".date('Y-m-d',strtotime($base_date.'-1 day'))."<br>"; //변환된 날짜 출력
    
    
    $thisday =  date("Y-m-d",strtotime('2020-07-02 7day'));
    echo $thisday."<br>";

    $timestamp = strtotime('2020-07-02');
    $thisday =  date("Y-m-d",strtotime('7day', $timestamp));
    echo $thisday."<br>";

    $time = time();
    echo "오늘 : ".date("Y-m-d", time());
    echo date("Y-m-d",strtotime("-1 day", $time))." 하루 전(어제)<br>";
    echo date("Y-m-d",strtotime("now", $time))." 현재<br>";
    echo date("Y-m-d",strtotime("+1 day", $time))." 하루 후(내일)<br>";
    echo date("Y-m-d",strtotime("+1 week", $time))." 일주일 후<br>";
    echo date("Y-m-d",strtotime("-1 month", $time))." 한달 전<br>";
    echo date("Y-m-d",strtotime("+1 month", $time))." 다음달<br>";
    echo date("Y-m-d",strtotime("+6 month", $time))." 6달후<br>";
    echo date("Y-m-d",strtotime("+12 month", $time))." 12달후<br>";
    echo date("Y-m-d",strtotime("next Thursday", $time))." 다음주 목요일<br>";
    echo date("Y-m-d",strtotime("last Monday", $time))." 지난 월요일<br>";
    echo date("Y-m-d",strtotime("10 September 2000", $time))." 2000년 9월 10일 <br>";

    echo date('Y-m-t'). " 이달의 말일<br>";
?>

