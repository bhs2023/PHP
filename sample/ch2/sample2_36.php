<?php

class Book { 
    // 프로퍼티(멤버 변수) 
    private $title; 
    public $author;
   
    /*
    public : 외부에서 접근이 가능합니다.
    protected : 내부와 상속 받은 클래스에서 접근이 가능합니다.
    private : 내부에서만 사용할 접근할 수 있습니다.
    */


    //기본생성자-기본값을 줄 수 있다 오버로딩 안된다    
    public function __construct($title="광장", $author="최인훈") {
        $this->title = $title;
        $this->author= $author;
    }
    
    public function output()
    {
        echo "제목 : ".$this->title."<br>";
        echo "저자 : ".$this->author."<br>";
    }

    public function setTitle($title)
    {
        $this->title = $title; 
    }
    public function getTitle()
    {
        return $this->title;
    }

    public function setAuthor($author)
    {
        $this->author = $author; 
    }
    public function getAuthor()
    {
        return $this->author;
    }
}

echo "기본값으로 객체 생성<br>";
$book = new Book();
$book->output();

echo "<br>값을 전달하면서 객체 생성<br>";
$book2 = new Book("앵무새죽이기", "하퍼리");
$book2->output();

?>
