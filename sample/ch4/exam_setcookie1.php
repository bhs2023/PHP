<?php

    //1분후에 만료한다 
    $timeout = time()+60; 
    //키, 값, 만료시간 
    
    setcookie('mycookie', '쿠키값은 내컴퓨에 저장됩니다.', $timeout);
    setcookie('name', '홍길동', $timeout);
    setcookie('age', '26', $timeout);
  
?>