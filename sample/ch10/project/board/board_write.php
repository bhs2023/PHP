<?php
include('../inc/dbConn.php');
include('../inc/common.php');

$page = (int)(StringUtil::nullToValue("p", "1"));
$searchKey = StringUtil::nullToValue("searchKey", "");
$searchTxt =StringUtil::nullToValue("searchTxt", "");
$seq =StringUtil::nullToValue("seq", "");
$mode =StringUtil::nullToValue("mode", "insert");
//수정일 경우 데이터를 다시 불러와야 한다 


if($mode=="modify")
{
  $sql = "select * from board where seq=$seq ";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);

  $title = $row["title"];
  $userid = $row["userid"];
  $regdate = $row["regdate"];
  $hit = $row["hit"];
  $contents = $row["contents"];
  
  mysqli_close($conn);
}
else
{
  $title = "";
  $userid =  "";
  $regdate =  "";
  $hit = 0;
  $contents =  "";
}


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

<form name="myform" id="myform" method="post">
    <input type="hidden" name="seq"       id="seq"          value="<?=$seq?>" >
    <input type="hidden" name="mode"      id="mode"         value="<?=$mode?>" >
   
   
<?php include('../inc/nav.php')?>


    <div class="container" style="margin-top:80px">
        <h2>게시판 쓰기</h2>

        <table class="table table-hover " style="margin-top: 30px;">
            <colgroup>
                <col width="25%">
                <col width="*">
            </colgroup>
        
            <tbody>
              <tr>
                <td>제목</td>
                <td>
                    <div class="mb-3" style="margin-top:13px;">
                        <input type="text" class="form-control" id="title" name="title" 
                        placeholder="제목을 입력하세요"  value="<?=$title?>">
                    </div>
                </td>
              </tr>       
              <tr>
                <td>작성자</td>
                <td>
                    <div class="mb-3" style="margin-top:13px;">
                        <input type="text" class="form-control" id="userid" name="userid" 
                        placeholder="이름을 입력하세요" value="<?=$userid?>" >
                    </div>
                </td>
              </tr>      
              <tr>
                <td>내용</td>
                <td>
                    <div class="mb-3" style="margin-top:13px;">
                      <textarea class="form-control" rows="5" id="contents" name="contents"><?=$contents?></textarea>
                    </div>
                </td>
              </tr>          
            </tbody>
          </table>
       
          <div class="container mt-3" style="text-align:right;">
          
              <button type="button" id="btnSave" class="btn btn-secondary">저장</button>
              <button type="button"  id="btnList" class="btn btn-secondary">목록</button>
          </div>
          
    </div>
</form>
</body>
</html>

<script>
  $(()=>{

    $("#btnSave").click( ()=>{
        if( ErrorCheck())
        {
          $("#myform").prop("action", "board_proc.php");
          $("#myform").submit();  
        }
    });

    $("#btnList").click( ()=>{
      $("#myform").prop("action", "board_list.php");
      $("#myform").submit();
    });
  });

  function ErrorCheck()
  {
      if($("#title").val().trim()=="")
      {
          alert("제목을 입력하세요")
          $("#title").focus();
          return false;
      }

      if($("#userid").val().trim()=="")
      {
          alert("작성자명을 입력하세요")
          $("#userid").focus();
          return false;
      }

      if($("#contents").val().trim()=="")
      {
          alert("내용을 입력하세요")
          $("#contents").focus();
          return false;
      }

      return true;

  }
</script>
