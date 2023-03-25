<?php
    //문자열의 대소문자 관련 함수
    $sentence = "don’t judge a book by its cover.";

    echo $sentence."<br/>";
    echo strtoupper($sentence)."<br/>"; //- 모든 알파벳을 대문자로
    echo strtolower($sentence)."<br/>"; // 모든 알파벳을 소문자로
    echo ucfirst($sentence)."<br/>"; //문장의 처음이 알파벳이면 그것만 대문자로
    echo ucwords($sentence)."<br/>";  //각 단어의 첫 알파벳을 대문자로
?>