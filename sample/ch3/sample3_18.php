<?php
// 폴더명 지정
$dir = "C:\\xampp\\htdocs\\sample\\ch3";
 
// 핸들 획득
$handle  = opendir($dir);

//파일 목록을 담을 배열을 만든다 
$files = array();
 
// 디렉터리에 포함된 파일을 저장한다.
$filename = readdir($handle);
while ($filename != false ) {
    if($filename != "." && $filename != ".."){
       // 파일인 경우만 목록에 추가한다.
        $path = $dir . "/" . $filename;
        if(is_file($path)){
            $files[] = $filename;
        } 
    }
    $filename = readdir($handle);
}
 
// 핸들 해제 
closedir($handle);
 
// 정렬, 역순으로 정렬하려면 rsort 사용
sort($files);
 
// 파일명을 출력한다.
foreach ($files as $f) {
    echo $f;
    echo "<br />";
} 
?>
