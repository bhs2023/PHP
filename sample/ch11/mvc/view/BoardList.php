<html>
<head></head>
<body>
<form name="myform" action="index.php">
	<input type="hidden" name="cmd" value="board"/>
	<input type="hidden" name="action" value="write"/>
	
<table style="width:80%; margin:auto">
	<colgroup>
		<col width="8%">
		<col width="*">
		<col width="12%">
		<col width="24%">	
	</colgroup>
	<thead>
		<tr>
			<th>번호</th>
			<th>제목</th>
			<th>작성자</th>
			<th>작성일</th>
		</tr>
	</thead>
	<tbody>
	<?php 

		foreach ($boardList as $id => $board)
		{
	?>
		<tr>
			<td><?=$board->seq?></td>
			<td><a href="index.php?cmd=board&action=view&seq=<?=$board->seq?>"><?=$board->title?></a></td>
			<td><?=$board->userid?></td>
			<td><?=$board->regdate?></td>
		</tr>
	<?php
	}
	?>
	</tbody>
</table>

<button type="button" onclick="goWrite()">글쓰기</button>
</form>

</body>
</html>

<script>
	function goWrite()
	{
		var frm = document.myform;
		frm.action="index.php";
		frm.method="get";
		frm.submit();
	}
</script>