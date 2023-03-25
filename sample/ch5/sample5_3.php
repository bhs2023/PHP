<?php
class Person{
    //내부변수들 
    private $name; 
    private $phone;
    private $email;
    public $address;

    //생성자에 매개변수를 주고 기본값을 부여함 
    function __construct($name="홍길동", $phone="010-0000-0000", $email="test@hanmail.net", $address="서울시")
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->address = $address;
    }

    public function display(){
        echo "이름 : .$this->name <br>";
        echo "전화 : .$this->phone <br>";
        echo "이메일 : .$this->email <br>";
        echo "주소 : .$this->address <br>";
        echo "<br>";        
    }
};

//객체생성 
$person1 = new Person();
$person1->display();

$person2 = new Person("임꺽정");
$person2->display();

$person3 = new Person("장길산", "010-1111-1111");
$person3->display();

$person4 = new Person("홍경래", "010-2222-2222", "hong@hanmail.net");
$person4->display();

$person5 = new Person("장승업", "010-3333-3333", "jang@hanmail.net", "경기도");
$person5->display();

?>

