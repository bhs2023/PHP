<?php 
	include_once("controller/BoardController.php");
	$cmd = "";

	if(isset($_GET['cmd']))
		$cmd=$_GET['cmd'];
	else if(isset($_POST['cmd']))
		$cmd = $_POST['cmd'];

	echo $cmd;
	if ($cmd=="board" )
	{
		$controller = new BoardController();
		$controller->invoke();
	}
	else
	{
		echo "잘못된 명령입니다.";
	}
?>