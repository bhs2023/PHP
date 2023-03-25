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

//객체배열 
$personList = array(
        new Person(),
        new Person("임꺽정"),
        new Person("장길산", "010-1111-1111"),
        new Person("홍경래", "010-2222-2222", "hong@hanmail.net"),
        new Person("장승업", "010-3333-3333", "jang@hanmail.net", "경기도")
);

//객체배열 출력하기 
$personList[0]->display();
echo "<br><br>";

print_r($personList);

echo "<br><br>";
foreach( $personList as $key => $person)
{
    echo $key."<br>";
    $person->display(); 
}

echo "<br><br>";
for($i=0; $i<count($personList); $i++)
{
    echo $key."<br>";
    $personList[$i]->display(); 
}

?>

