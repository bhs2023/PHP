<?php

//url : http://localhost:9000/sample/ch2/sample2_20.php?color=red
//url : http://localhost:9000/sample/ch2/sample2_20.php?color=green

$favcolor = $_GET['color'];

switch ($favcolor) {
    case "red":
        echo "빨간색을 좋아하시는군요 !!!";
        break;
    case "blue":
        echo "파란색을 좋아하시는군요 !!!";
        break;
    case "green":
        echo "초록색을 좋아하시는군요 !!!";
        break;
    default:
        echo "저는 빨간색, 초록색, 파란색만 배웠습니다 당신이 좋아하는 색은 아직 배우지 못했습니다.";
}
?>

