<?php

trait SayHello
{
    public function sayHello(){
        echo $this->name."님 안녕하세요<br/>";
    }
}

trait SayError
{
    public function sayError(){
        echo "에러메시지 입니다.<br/>";
        echo $this->error;
    }
}

class Person{
    //내부변수들 
    public $name; 
   

    function __construct($name="홍길동")
    {
        $this->name = $name;
       
    }

    use sayHello;
};

class Student{
    public $name;
    public $error="404 에러입니다.";
    function __construct($name="임꺽정")
    {
        $this->name = $name;
    }

    use sayHello, SayError;
}

$person = new Person();
$person->sayHello();

$st = new Student();
$st->sayHello();
$st->sayError();

?>

