<?php

$reg = "/a{2}b/";
echo $reg."<br>";
echo preg_match($reg, "b")."<br>";        //0
echo preg_match($reg, "ab")."<br>";        //0
echo preg_match($reg, "aab")."<br>";      //1
echo preg_match($reg, "aaab")."<br>";     //1 - 패턴을 a 와 aab로 본다 그래서 일치한다 

//a가 b 앞에 2번이상 4번이하 등장해야 한다 
$reg = "/a{2,4}b/";
echo $reg."<br>";
echo preg_match($reg, "b")."<br>";        //0
echo preg_match($reg, "ab")."<br>";       //0
echo preg_match($reg, "aab")."<br>";      //1
echo preg_match($reg, "aaaabcd")."<br>";  //1
echo preg_match($reg, "aaaaabcd")."<br>";  //1 a  와 aaaab 와 cd로 볼 수 있다 
?>

