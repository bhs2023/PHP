<?php
class Person{
    //내부변수들 
    private $name; 
    private $phone;
    private $email;
    public $address;

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

$person = new Person();
$person->setValue("홍길동", "010-0000-0000", "test@hanmail.net", "서울시 관악구");
$person->display();

print_r( $person );

?>

