<?php
$reg = "/cat$/"; //정규식 - 문장의 끝이 cat이어야 한다 
$sentence1 = "I love my cat";
$sentence2 = "cat is lovely animal";
 
$result1 = preg_match($reg, $sentence1);
$result2 = preg_match($reg, $sentence2);

if ($result1 == 1){
    echo $sentence1."는 cat로 끝납니다 .<br>";
}else{
    echo $sentence1."는 cat로 끝나지 않습니다.<br>";
}

if ($result2 == 1){
    echo $sentence2."는 cat로 끝납니다 .<br>";
}else{
    echo $sentence2."는 cat로 끝나지 않습니다.<br>";
}
 ?>

