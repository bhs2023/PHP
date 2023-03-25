<?php
//파일관련함수  
//파일을 만들어서 내용을 저장하기  

$filename = 'test.txt';
$filecontent = "파일 쓰기를 연습해봅시다\n";

$fp = fopen($filename, 'w'); 

echo "file id 확인하기<br>";
echo $fp."<br>";

if ($fp == NULL) {
    echo "Cannot open file ($filename)";
    exit;
}

if (fwrite($fp, $filecontent) === FALSE) {
    echo "Cannot write to file ($filename)";
    exit;
}

echo "파일 작성 성공<br>";
fclose($fp);

?>

