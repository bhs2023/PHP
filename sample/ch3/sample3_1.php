<?php

//trim 함수 테스트 
$word = "  trim function test  ";

echo "*".$word."*<br/>";     
//문자열 양끝에 있는 공백이 출력된다. 
echo "*".trim($word)."*<br/>"; 
//문자열 양쪽에 공백이 제거된다. 
echo "*".ltrim($word)."*<br/>"; 
//문자열 왼쪽에 공백이 제거된다 
echo "*".rtrim($word)."*<br/>"; 
//문자열 오른쪽에 공백이 제거된다
echo "*".chop($word)."*";       
//문자열 오른쪽의 공백이 제거된다 
?>

