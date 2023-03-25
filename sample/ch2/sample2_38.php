<?php
class Book { 
    // 프로퍼티(멤버 변수) 
    public $title; 
    public $author;
    public $publisher;
   
    //기본생성자-기본값을 줄 수 있다 오버로딩 안된다    
    public function __construct($title="광장", $author="최인훈", $publisher="문학과비평") {
        $this->title = $title;
        $this->author= $author;
    }
    
    public function output()
    {
        echo "제목 : ".$this->title."<br>";
        echo "저자 : ".$this->author."<br>";
        echo "출판사 : ".$this->author."<br>";
    }
}

//객체 배열 
$book = Array();

//추가
array_push( $book, new Book());
array_push( $book, new Book("구운몽"));
array_push( $book, new Book("잔인한도시", "이청준"));
array_push( $book, new Book("삼대", "염상섭", "해냄"));
array_push( $book, new Book("태평천하", "채만식", "돌베게"));

echo "데이터 개수 : ". count($book) . "<br>";

$book[0]->output();
$book[1]->output();
$book[2]->output();
$book[3]->output();
$book[4]->output();

//바꾸기 
echo "<br>-----------------------------------------------<br>";
$book[3] = new Book("마당깊은집", "김원일", "해냄");
for($i=0; $i<count($book); $i++)
{
    echo $book[$i]->title."  ". $book[$i]->author."  ".$book[$i]->publisher."<br>";
}

//삭제
/*array_splice();
배열을 잘라내는 기능을 이용하여 값을 삭제
1개 값만 삭제하거나 연속하는 값을 삭제할 때 유용
*/

$del = array_splice($book, 2,1);
echo "<br>-----------------------------------------------<br>";
for($i=0; $i<count($book); $i++)
{
    echo $book[$i]->title."  ". $book[$i]->author."  ".$book[$i]->publisher."<br>";
}

unset($book);

echo count($book);
?>
