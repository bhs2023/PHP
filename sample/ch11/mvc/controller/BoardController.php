<?php
include_once("model/BoardModel.php");

class BoardController {
	public $boardModel;
	
	public function __construct()  
    {  
        $this->boardModel = new BoardModel();
    } 
	
	public function invoke()
	{
		//echo isset($_GET['action'])."<br/>";
		$action="list";

		if(isset($_GET['action']))
			$action=$_GET['action'];
		else if(isset($_POST['action']))
			$action = $_POST['action'];
			
		if ($action=="list" )
		{
			$boardList = $this->boardModel->getBoardList();
			include 'view/BoardList.php';
		}
		else  if($action=="view")
		{
			$board = $this->boardModel->getBoardView($_GET['seq']);
			include 'view/BoardView.php';
		}
		else  if($action=="write")
		{
			include 'view/BoardWrite.php';
		}
		else  if($action=="save")
		{
			$this->boardModel->insert( $_POST['title'], $_POST['writer'], $_POST['contents']);
		}
	}
}

?>