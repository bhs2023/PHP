<?php
    //연관성배열
    $persons = Array();
    array_push($persons, Array('name'=>'홍길동',  'age'=>23, 'phone'=>'010-0000-0001'));
    array_push($persons, Array('name'=>'임꺽정',  'age'=>25, 'phone'=>'010-0000-0002'));
    array_push($persons, Array('name'=>'장길한',  'age'=>27, 'phone'=>'010-0000-0003'));
    array_push($persons, Array('name'=>'임경업',  'age'=>29, 'phone'=>'010-0000-0004'));
    array_push($persons, Array('name'=>'홍경래',  'age'=>30, 'phone'=>'010-0000-0005'));

    echo "컬럼값들만 가져오기<br>";
    $column = array_column($persons, 'name');
    print("<pre>");
    print_r($column);
    print("</pre>");

    $key = "임경업";
    $pos = array_search($key, array_column($persons, 'name'));  
    if($pos){
        echo $persons[$pos]['name']."&nbsp;";
        echo $persons[$pos]['age']."&nbsp;";
        echo $persons[$pos]['phone']."<br>";
    }else{
        echo $key."를 찾을 수 없습니다<br>";
    }
   
?>