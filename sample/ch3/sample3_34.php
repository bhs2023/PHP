<?php
$reg="/[가-힣]/"; //한글이 한글자라도 포함되어 있다면  
echo "한글없음 ".preg_match($reg, "ASCEE")."<br>";      //0
echo "한글만 ".preg_match($reg, "한글")."<br>";       //1
echo "한글포함 ".preg_match($reg, "한글A")."<br>";      //1
echo "한글포함 ".preg_match($reg, "한글A12")."<br>";    //1

echo "----------------------<br>";
$reg="/[^가-힣]/"; //한글을 제외한 문자가 하나라도 있다면 1 아니면 0반환 
echo "한글없음 ".preg_match($reg, "ASCEE")."<br>";      //1
echo "한글만   ".preg_match($reg, "한글")."<br>";       //0
echo "한글포함 ".preg_match($reg, "한글A")."<br>";      //1
echo "한글포함 ".preg_match($reg, "한글A12")."<br>";    //1
?>

