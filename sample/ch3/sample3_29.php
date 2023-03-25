<?php
 
$sentence1 = "I love my cat";
$sentence2 = "dog is lovely animal";

$reg = "/c.t/";
echo preg_match($reg, $sentence1)."<br>";  //1
echo preg_match($reg, $sentence2)."<br>";  //0

$reg = "/l...l/";
echo preg_match($reg, $sentence1)."<br>";  //0
echo preg_match($reg, $sentence2)."<br>";  //1

//첫글자가 kKcC  넷중 하나이면 가능  korea, Korea, corea, Corea
$reg = "/[kKcC]orea/";
echo preg_match($reg, "I am korean")."<br>";
echo preg_match($reg, "I am Korean")."<br>";
echo preg_match($reg, "I am Corean")."<br>";
echo preg_match($reg, "I am corean")."<br>";
?>
