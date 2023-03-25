<?php
//폴더  만들기
mkdir('./test');

$filename = './test.txt'; // 원본파일

// 실제 존재하는 파일인지 체크...
if(file_exists($filename)) {
     if(!copy($filename, "./test/".$filename)) {
           echo "파일 복사 실패";
     } else if(file_exists($filename)) {
           echo "파일 복사 성공";
     }
}


//해당폴더의 파일 삭제하기 
unlink("./test/".$filename);

?>
