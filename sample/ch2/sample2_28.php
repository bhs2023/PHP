<?php
	
	//url : http://localhost:9000/sample/ch2/sample2_28.php

	$woods = Array("은행나무", "이팝나무", "측백나무", "고로쇠나무", "라일락");
	
	$i=0;
	do
	{
		echo $woods[$i]."<br>";
		$i = $i+1;
	}while( $i< count($woods));
?>
