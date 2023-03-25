<?php
class Person{
    //내부변수들 
    public $name; 
    public $phone;

    //생성자에 매개변수를 주고 기본값을 부여함 
    function __construct($name="홍길동", $phone="010-0000-0000")
    {
        $this->name = $name;
        $this->phone = $phone;
    }

    public function display(){
        echo "이름 : .$this->name <br>";
        echo "전화 : .$this->phone <br>";
        echo "<br>";        
    }

};

class Student extends Person
{
    public $major; 
    public $minor;

    function __construct($name="홍길동", $phone="010-0000-0000", $major="컴퓨터공학", $minor="빅데이터")
    {
        //부모 생성자 호출하기
        parent::__construct($name, $phone); 

        $this->major = $major;
        $this->minor = $minor;
    }

    //함수오버라이딩 
    public function display(){
        echo "이름 : .$this->name <br>";
        echo "전화 : .$this->phone <br>";
        echo "전공 : .$this->major <br>";
        echo "부전공 : .$this->minor <br>";
        echo "<br>";        
    }
}

$st = new Student();
$st->display();

?>

