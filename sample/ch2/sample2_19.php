<?php
	
	//url : http://localhost:9000/sample/ch2/sample2_19.php?select=1
	//url : http://localhost:9000/sample/ch2/sample2_19.php?select=2
	//url : http://localhost:9000/sample/ch2/sample2_19.php?select=3
	//url : http://localhost:9000/sample/ch2/sample2_19.php?select=4

	//if문을 배워보자 

	$select = $_GET['select'];
	
	if($select =="1")
		echo "축하합니다. 아이팟에 당첨되었습니다.<br>";
	else if($select =="2")
		echo "축하합니다. 제주도 2박3일 여행권에 당첨되었습니다.<br>";
	else if($select=="3")
		echo "축하합니다. 핸드선풍기에 당첨되셨습니다.<br>";
	else
		echo "안타깝지만 다음기회에";
?>
