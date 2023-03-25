<?php
    //문자열의 길이 알아내는 함수 
    $sentence = "Php is web programming language";

    echo "문자열의 길이 ". strlen($sentence)."<br>";
    
    echo "문자열의 부분 추출 ".  substr( $sentence, 0, 3). "<br>";
    //Php 추출  0번부터 시작해서 3개의 문자를 추출하라 
    echo "문자열의 부분 추출 ".  substr( $sentence, 7, 3). "<br>";
    //web 추출  7번부터 시작해서 3개의 문자를 추출하라 

    $pos = strpos($sentence, "programming");
    echo $pos."<br>"; 

    $pos = strpos($sentence, "prgramming");
    echo $pos."<br>"; 

    $result = str_replace($sentence, "Php", "PHP");
    echo $result."<br>"; 
    
?>