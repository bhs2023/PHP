<?php
	
	$work_time = 50;
	$per_pay = 10000;

	$base_pay = $work_time * $per_pay;
	$over_pay = 0; 

	if($work_time>40) 
	{
		$over_pay =($work_time-40)* $per_pay * 0.5;
	}
	
	echo "기본급 : ".$base_pay."<br>";
	echo "초과수당 : ".$over_pay."<br>";
		
?>
