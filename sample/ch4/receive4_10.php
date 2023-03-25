<?php
   //isset 변수가 설정이 되어 있으면 true  없으면 false반환
    if (isset($_GET['submit1'])){
        
        echo "submit1 버튼이 눌림<br>";
    }
    else if (isset($_GET['submit2'])){
        echo "submit2 버튼이 눌림<br>";
    }else if (isset($_GET['submit3'])){
        echo "submit3 버튼이 눌림<br>";
    }
    else {
        echo "알 수 없습니다";
    }
?>

