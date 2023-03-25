<?php

function find($array, $key)
{
   for($i=0; $i<count($array); $i++)
   {
       if( $array[$i]==$key)
            return $i;
   }
   return -1;
}


echo "<br>--- 함수에 배열 전달하기 ---<br>";
$array = Array(1,2,3,4,5);
echo find( $array, 2 )."<br/>";
echo find( Array(10,20,30,40,50,60,70,80,90,100), 40 )."<br/>";
echo find( Array("일","이", "삼"), "이" )."<br/>";
echo find( Array("일","이", "삼"), "사" )."<br/>";

?>
