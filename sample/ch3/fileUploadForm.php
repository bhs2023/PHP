<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script type="text/javascript">

function goWrite(f) {
    // 업로드 할 수 있는 파일 확장자를 제한합니다.
	var extArray = new Array('hwp','xls','doc','xlsx','docx','pdf','jpg','gif','png','txt','ppt','pptx', 'jpeg');
	var path = document.getElementById("upfile").value;
	if(path == "") {
		alert("파일을 선택해 주세요.");
		return false;
	}

	var pos = path.indexOf(".");
	if(pos < 0) {
		alert("확장자가 없는파일 입니다.");
		return false;
	}

	var ext = path.slice(path.indexOf(".") + 1).toLowerCase();
	var checkExt = false;

	for(var i = 0; i < extArray.length; i++) 
    {
		if(ext == extArray[i]) 
        {
			checkExt = true;
			break;
        }
	}

	if(checkExt == false) {
		alert("업로드 할 수 없는 파일 확장자 입니다.");
	    return false;
	}

	return true;
}

</script>


<form name="uploadForm" id="uploadForm" method="post"  
      enctype="multipart/form-data" 
      action="upload_process.php"
      onsubmit="return goWrite(this);">

    <div>
        <label for="upfile">첨부파일</label>
        <input type="file" name="upfile" id="upfile" />
    </div>
    <input type="submit" value="업로드" />

</form>

</body>
</html>