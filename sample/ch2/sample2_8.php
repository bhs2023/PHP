<?php
	
	//url : http://localhost:9000/sample/ch2/sample2_8.php?x=5&y=7

	$x = $_GET['x'];
	$y = $_GET['y'];

	printf("%d >  %d = %d<br>", $x, $y, $x > $y );
	printf("%d <  %d = %d<br>", $x, $y, $x < $y );
	printf("%d >= %d = %d<br>", $x, $y, $x <= $y);
	printf("%d <= %d = %d<br>", $x, $y, $x >= $y);
	printf("%d == %d = %d<br>", $x, $y, $x == $y);
	printf("%d != %d = %d<br>", $x, $y, $x != $y);
	
?>

