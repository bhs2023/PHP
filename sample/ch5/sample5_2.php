<?php
class Person{
    //내부변수들 
    private $name; 
    private $phone;
    private $email;
    public $address;

    function __construct()
    {
        echo "생성자입니다<br>";
        $this->name = "홍길동";
        $this->phone = "010-0000-0000";
        $this->email = "test@hanmail.net";
        $this->address = "서울시 관악구";
    }

    public function setValue($name, $phone, $email, $address)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->address= $address;
    }

    public function display(){
        echo "이름 : .$this->name <br>";
        echo "전화 : .$this->phone <br>";
        echo "이메일 : .$this->email <br>";
        echo "주소 : .$this->address <br>";        
    }
};

//객체생성 
$person = new Person();
$person->display();

?>

