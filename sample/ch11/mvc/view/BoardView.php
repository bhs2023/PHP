<html>
<head></head>

<body>

<?php 

	echo '제목:' .   $board->title . '<br/>';
	echo '작성자:' . $board->userid . '<br/>';
	echo '작성일:' . $board->regdate . '<br/>';
	echo '내용:' .  $board->contents . '<br/>';
?>
<form name="myform" action="index.php">
	<input type="hidden" name="cmd" value="board"/>
	<input type="hidden" name="action" value="list"/>
	
	
	<button type="submit">목록</button>

</form>

</body>
</html>