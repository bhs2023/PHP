<?php
//중간에 숫자 하나 있어야 함 
$reg="/a[0-9]b/";  
//0~9까지중에 하나라도 있어야 한다 
//a0b, aa0b
echo $reg."<br>";
echo preg_match($reg, "a0b")."<br>";
echo preg_match($reg, "aa0b")."<br>";
echo preg_match($reg, "a0111b")."<br>";
echo preg_match($reg, "ab")."<br>";

//[^]괄호안에 지정한 문자가 포험되지 않은 하나의 문자라도 있으면
//숫자로만 구성되면 안된다. 
$reg="/a[^0-9]b/";  //0~9에 해당하는 문자를 제외하자 만일 0~9문자가 포함되지 않으면 1 포함되면 0 반환
echo $reg."<br>";
echo preg_match($reg, "aab")."<br>";    //1
echo preg_match($reg, "a0b")."<br>";    //0
echo preg_match($reg, "01111")."<br>";  //0
echo preg_match($reg, "ab")."<br>";     //0
echo preg_match($reg, "aaab")."<br>";   //1

?>

