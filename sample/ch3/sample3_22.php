<?php
//연관성배열
//key 와  value  형태로 저장하기 
$persons = array(
   '1'=>Array('name'=>'홍길동',  'age'=>23, 'phone'=>'010-0000-0001'),
   '2'=>Array('name'=>'임꺽정',  'age'=>25, 'phone'=>'010-0000-0002'),
   '3'=>Array('name'=>'장길한',  'age'=>27, 'phone'=>'010-0000-0003'),
   '4'=>Array('name'=>'임경업',  'age'=>29, 'phone'=>'010-0000-0004'),
);

$persons['5']=Array('name'=>'홍경래',  'age'=>31, 'phone'=>'010-0000-0005');

//하나의 요소에 접근하기 
echo $persons['1']['name']."<br/>";
echo $persons['1']['age']."<br/>";
echo $persons['1']['phone']."<br/>";

echo $persons['2']['name']."<br/>";
echo $persons['2']['age']."<br/>";
echo $persons['2']['phone']."<br/>";

echo "<br><br>여러개의요소에 접근하기<br>";

foreach($persons as $keys => $values){
    echo $keys . '=>';
    echo $values['name'].' ';
    echo $values['age'].' ';
    echo $values['phone'].'<br>';
}   

print_r($persons);
?>