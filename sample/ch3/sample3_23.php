<?php
 
//배열에 별도의 키값을 주지않고 순서대로 저장함 
$persons = Array();
array_push($persons, Array('name'=>'홍길동',  'age'=>23, 'phone'=>'010-0000-0001'));
array_push($persons, Array('name'=>'임꺽정',  'age'=>25, 'phone'=>'010-0000-0002'));
array_push($persons, Array('name'=>'장길한',  'age'=>27, 'phone'=>'010-0000-0003'));
array_push($persons, Array('name'=>'임경업',  'age'=>29, 'phone'=>'010-0000-0004'));

$persons[4]=Array('name'=>'홍경래',  'age'=>31, 'phone'=>'010-0000-0005');

for($i=0; $i<count($persons); $i++){
    echo $i . '=>';
    echo $persons[$i]['name'].' ';
    echo $persons[$i]['age'].' ';
    echo $persons[$i]['phone'].'<br>';
}   

print_r($persons);
?>