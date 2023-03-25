<?php

    //strlen(문자열) : 문자열 길이 알아내기 
    //한글의 경우 utf-8 문자라 한글자에 3byte씩, 영문 1byte
    echo "star" . " " . strlen("star")."<br/>";
    echo "별" . " " . strlen("별")."<br/>";
    
    //배열 적용하기 
    $flowers = Array("장미", "히야신스", "목련", "수선화", "rose", "sunflower");
    foreach ($flowers as $key => $value)
        echo $value. " ===> ". strlen($value). "<br/>"

?>