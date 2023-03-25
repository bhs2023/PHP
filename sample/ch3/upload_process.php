<?php
if(isset($_FILES['upfile']) && $_FILES['upfile']['name'] != "") {
    $file = $_FILES['upfile'];
    $upload_directory = '\\xampp\\htdocs\\sample\\ch3\\upload/';
    $upload_directory = '/xampp/htdocs/sample/ch3/upload/';
    $ext_str = "hwp,xls,doc,xlsx,docx,pdf,jpg,gif,png,txt,ppt,pptx,jpeg";
    $allowed_extensions = explode(',', $ext_str);

    $max_file_size = 50 * 1024 * 1024; // 5M까지 첨부 가능함 
    $ext = substr($file['name'], strrpos($file['name'], '.') + 1);

    // 확장자 체크
    if(!in_array($ext, $allowed_extensions)) {
        echo "업로드할 수 없는 확장자 입니다.";
        exit;
    }

    // 파일 크기 체크
    if($file['size'] >= $max_file_size) {
        echo "50MB 까지만 업로드 가능합니다.";
        exit;
    }

    //별도의 파일명을 부여한다. 서로 충돌이 나지 않도로 
    $path = md5(microtime()) . '.' . $ext;
    echo $file['tmp_name'];

    if(move_uploaded_file($file['tmp_name'], $upload_directory.$path)) {
       
        $name_orig = $file['name'];
        $name_save = $path;        

        echo"<h3>파일 업로드 성공</h3>";
    }

} 
else 
{
    echo "<h3>파일이 업로드 되지 않았습니다.</h3>";
    echo '<a href="javascript:history.go(-1);">이전 페이지</a>';
}

?>
