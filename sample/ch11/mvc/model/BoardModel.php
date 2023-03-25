<?php
include_once("inc/dbConn.php");
include_once("model/Board.php");
class BoardModel {
	public $boardList;
	
	public function getBoardList()
	{

		$conn = DBInfo::getConnection();		
		$sql = "select * from board 
		       order by seq desc 
			   limit 0, 10";
		$result = mysqli_query($conn, $sql);

		$boardList=array();
		$id=1;
	    while ($row = mysqli_fetch_array($result)){
			$boardList[$id] = new Board($row["seq"], $row["title"], $row["userid"],  $row["contents"], $row["regdate"]);
			//print_r($row);
			$id++;
   		}
		mysqli_close($conn);
		return $boardList;
	}
	
	public function getBoardView($seq)
	{
		$conn = DBInfo::getConnection();		
		$sql = "select * from board where seq=".$seq;
		
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result);
		mysqli_close($conn);
		#print_r($row[0]);
		return new Board($row["seq"], $row["title"], $row["userid"],  $row["contents"], $row["regdate"]);
	}
	
	public function insert($title, $writer, $contents)
	{
		$conn = DBInfo::getConnection();	
		$sql="insert into board(userid, title, contents, regdate, hit) values('$title', '$contents', '$userid', now(), 0)";
		mysqli_query($conn, $sql);
		mysqli_close($conn);

		header( 'Location: index.php?cmd=board&action=list' );
	}
}

?>