<?php
//파일 읽기
$filename = 'test.txt';
$filecontent = "";

$fp = fopen($filename, 'r'); 

if ($fp == NULL) {
    echo "Cannot open file ($filename)";
    exit;
}

$filecontent =fread($fp, 1024);

echo $filecontent;
fclose($fp);

?>
