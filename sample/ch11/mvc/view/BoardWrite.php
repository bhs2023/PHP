<html>
<head></head>

<body>

<form name="myform" action="index.php" method="post">
	<input type="hidden" name="cmd" value="board"/>
	<input type="hidden" name="action" value="save"/>
	
	제목 : <input type="text" name="title" value=""> <br/>
	작성자 : <input type="text" name="writer" value=""> <br/><br/>
	내용 : <textarea name="contents" rows="5" cols="40"></textarea> <br/>
	
	<button type="submit" >등록</button>
</form<
</body>
</html>