<?php 
	$colors = array("red", "green", "blue", "yellow"); 


	echo"<br><br>";
	//배열내용 전체 출력하기 
	print_r($color);

	echo"<br><br>";
	//배열의 크기  
	count($color);

	//배열에서 특정 내용 추출하기 
	$colors2 = array_slice($colors, 2, 4);
	print_r($colors2);
?>