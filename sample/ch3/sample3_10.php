<?php
   
    $filename = "test1.txt";

    //1. strstr함수를 이용해서 확장자 찾기 
    //strstr은 앞에서부터 찾는다 
    $ext = strstr($filename, ".");
    echo $ext."<br>";

    //2. strrchr함수를 사용해서 확장자 구하기- 
    $ext= strrchr($filename, '.');
    echo $ext."<br>";
    
    //확장자만 추출하기
    $ext = substr($ext, 1);
    echo $ext."<br>";
 
    //3. strrpos 함수와 substr함수를 사용해서 확장자 구하기
    $ext = substr($filename, strrpos($filename, '.') + 1);
    echo $ext."<br>";
    
    $result = explode('.', $filename);
    print_r($result);
    echo "<br>";

    $ext = end($result);
    //echo $ext;
    //echo"<br>";
 
    //4 preg_replace 함수에 정규식을 대입해서 확장자 구하기
    $ext = preg_replace('/^.*\.([^.]+)$/D', '$1', $filename);
    echo$ext;
    echo"<br>";
 
    //5 pathinfo 함수를 사용해서 확장자 구하기
    $fileinfo = pathinfo($filename);
    $ext = $fileinfo['extension'];
    echo$ext;
    
?>