<?php

//b앞에 a가 0번 이상 등장
$reg = "/a*b/";  
echo $reg."<br>";
echo preg_match($reg, "b")."<br>";      //1
echo preg_match($reg, "ab")."<br>";     //1
echo preg_match($reg, "aab")."<br>";    //1
echo preg_match($reg, "c")."<br>";      //0

//+: b 앞에 a가 한번이상 등장 
$reg = "/a+b/";
echo $reg."<br>";
echo preg_match($reg, "b")."<br>";        //0
echo preg_match($reg, "ab")."<br>";       //1
echo preg_match($reg, "aab")."<br>";      //1
echo preg_match($reg, "aaaabcd")."<br>";  //1
?>

