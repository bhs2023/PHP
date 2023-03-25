<?php
require_once('../inc/dbConn.php');
require_once('../inc/common.php');
require_once('../inc/paging.php');
$pager = new Paging();
$link_url="./board_list.php";
$total_cnt=0;

$page = (int)(StringUtil::nullToValue("p", "1"));
$searchKey = StringUtil::nullToValue("searchKey", "");
$searchTxt =StringUtil::nullToValue("searchTxt", "");

$start = ($page-1)*10;

$where ="";
if( $searchKey=="2")
  $where = " where title like '%$searchTxt%' ";
else if($searchKey=="3")
  $where = " where contents like '%$searchTxt%' ";
else if($searchKey=="4")
  $where = " where title like '%$searchTxt%' or contents like '%$searchTxt\%' ";

  /*
한글이 깨질경우에 my.ini 파일에 다음 부분 찾아서 추가 

# Where do all the plugins live
plugin_dir = "C:/xampp/mysql/lib/plugin/" 

####################### 여기추가 #############
character-set-server=utf8
skip-character-set-client-handshake
###################################################
*/
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

<form name="myform" id="myform" >
    <input type="hidden" name="p" id="p" value="<?=$page?>">
    <input type="hidden" name="seq" id="seq" value="">
  <?php include('../inc/nav.php')?>


      <div class="container" style="margin-top:80px">
          <h2>게시판 목록</h2>

          <div class="input-group mb-3" style="margin-top:20px;">
              
              <select  class="form-select-sm " id="searhKey" name="searchKey" >
                <option value="1" >선택하세요</option>
                <option value="2" <?php if($searchKey=="2"){ ?> selected <?php } ?> >제목</option>
                <option value="3" <?php if($searchKey=="3"){ ?> selected <?php } ?> >내용</option>
                <option value="4" <?php if($searchKey=="4"){ ?> selected <?php } ?> >제목+내용</option>
              </select>
              <input type="text" class="form-control" placeholder="Search"
              id="searchTxt" name="searchTxt" value="<?=$searchTxt?>">
              <button class="btn btn-secondary" type="button" id="btnSearch">Go</button>
            </div>

          <table class="table table-hover ">
              <colgroup>
                <col width="8%"></col>
                <col width="*"></col>
                <col width="12%"></col>
                <col width="12%"></col>
                <col width="8%"></col> 
              </colgroup>
              <thead class="table-secondary">
                <tr>
                  <th>번호</th>
                  <th>제목</th>
                  <th>작성자</th>
                  <th>작성일</th>
                  <th>조회수</th>
                </tr>
              </thead>
              <tbody>
              <?php
                
                $sql = "select count(*) cnt from board $where ";
                $result = mysqli_query($conn, $sql);
                $totalCnt=0;
                if($result)
                {
                  $row = mysqli_fetch_array($result);
                
                  if($row) {
                    $totalCnt = $row['cnt'];
                  }
                }

                $sql = "
                select * from
                (
                    select   seq  ,userid   ,title   ,contents  
                      ,ifnull(hit , 0) hit 
                      ,date_format(regdate, '%Y-%m-%d') regdate
                      ,@rownum := @rownum+1 AS rnum
                    from board A, (select @rownum:=0) B
                    $where 
                    order by seq desc 
                ) A
                limit $start, 10  ";
              

                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);
                while($row) {
          
            ?>
                <tr>
                  <td><?=$row['rnum']?></td>
                  <td><a href="#none" onclick="goView('<?=$row['seq']?>')"><?=$row['title']?></a></td>
                  <td><?=$row['userid']?></td>
                  <td><?=$row['regdate']?></td>
                  <td><?=$row['hit']?></td>
                </tr>
          <?php
                  $row = mysqli_fetch_array($result);
              }
          
              mysqli_close($conn);
          ?>
              </tbody>
            </table>

          <div >
            <?=$pager->PageLinkView($link_url,$totalCnt,10,$page)?>
          </div>
        
            <div class="container mt-3" style="text-align:right;">
              <a href="#" class="btn btn-secondary" id="btnWrite">글쓰기</a>
            </div>
            
      </div>
  </form>
</body>
</html>

<script>
$(()=>{
  $("#btnSearch").click(()=>{
      $("#myform").prop("action", "board_list.php");
      $("#myform").submit();
  })

  $("#searhKey").change( function(){
      if($(this).val()=="1")
        $("#searchTxt").val("");
  });

  $("#btnWrite").click( function(){
    $("#myform").prop("action", "board_write.php");
    $("#myform").submit();
  })

})

function goView(id)
{
    $("#seq").val(id);
    $("#myform").prop("action", "board_view.php");
    $("#myform").submit();
}

</script>