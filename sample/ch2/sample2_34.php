<?php

function sumArray($array)
{
   $sum=0;
   for($i=0; $i<count($array); $i++)
   {
        $sum += $i;    
   }
   return $sum;
}


echo "<br>--- 함수에 배열 전달하기 ---<br>";
$array = Array(1,2,3,4,5);
echo sumArray( $array )."<br/>";
echo sumArray( Array(10,20,30,40,50,60,70,80,90,100) )."<br/>";
?>
