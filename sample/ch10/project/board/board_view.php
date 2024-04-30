<?php
require_once('../inc/dbConn.php');
require_once('../inc/common.php');

$page = (int)(StringUtil::nullToValue("p", "1"));
$searchKey = StringUtil::nullToValue("searchKey", "");
$searchTxt =StringUtil::nullToValue("searchTxt", "");
$seq =StringUtil::nullToValue("seq", "");

//조회수 증가하기 
$sql = "update board set hit=hit+1 where seq=$seq";
$result = mysqli_query($conn, $sql);

$sql = "select * from board where seq=$seq";


$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$title = $row["title"];
$userid = $row["userid"];
$regdate = $row["regdate"];
$hit = $row["hit"];
$contents = $row["contents"];
$contents=str_replace("\n", '<br/>', $contents);

mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

<form name="myform" id="myform"  method="get">
    <input type="hidden" name="p" id="p" value="<?=$page?>">
    <input type="hidden" name="searchTxt" id="searchTxt"  value="<?=$searchTxt?>">
    <input type="hidden" name="searchKey" id="searchKey"  value="<?=$searchKey?>">
    <input type="hidden" name="seq"       id="seq"        value="<?=$seq?>">
    <input type="hidden" name="mode"      id="mode"       value="">


  <?php include_once('../inc/nav.php')?>


    <div class="container" style="margin-top:80px">
        <h2>게시판 상세보기</h2>


        <table class="table table-hover " style="margin-top:30px;">
            <tbody>
              <tr class="table-secondary">
                <th>제목</th>
                <td colspan="5"><?=$title?></td>
              </tr>
              <tr>
                <th >작성자</th>
                <td><?=$userid?></td>
                <th >작성일</th>
                <td><?=$regdate?></td>
                <th  >조회수</th>
                <td><?=$hit?></td> 
              </tr>
              <tr>
                <th colspan="6"  class="table-secondary">내용</td>
              </tr>
              <tr>
                <td colspan="6"><?=$contents?></td>
              </tr>
            </tbody>
          </table>

 
 <?php
 
 
 ?>
       
          <div class="container mt-3" style="text-align:right;">
            <button type="button" class="btn btn-secondary" id="btnModify">수정</button>
            <button type="button" class="btn btn-secondary" id="btnDelete">삭제</button>
            <button type="button" class="btn btn-secondary" id="btnList">목록</button>
          </div>
          
    </div>
</form>

</body>
</html>

<script>
  $(()=>{
    $("#btnModify").click( ()=>{
      $("#mode").val("modify");
      $("#myform").prop("action", "board_write.php");
      $("#myform").submit();
    });

    $("#btnDelete").click( ()=>{
      if(confirm("삭제하시겠습니까?"))
      {
        $("#mode").val("delete");
        $("#myform").prop("action", "board_proc.php");
        $("#myform").submit();
      }
    });

    $("#btnList").click( ()=>{
      $("#myform").prop("action", "board_list.php");
      $("#myform").submit();
    });
  })
</script>
