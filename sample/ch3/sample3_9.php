<?php
    //문자열 바꾸기 
    $sentence="I like star, blue star, red star, yello star. I like star";
    $new_sentence = strtr($sentence, "star", "moon");

    echo "원래문자열 : ".$sentence."<br/>";
    echo "바꾼문자열 : ".$new_sentence."<br/>";

?>