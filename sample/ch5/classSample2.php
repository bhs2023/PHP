<?php

//객체지향으로 변경함 
class Score{
    //내부변수들 
    public $name; 
    public $kor;
    public $eng;
    public $mat;
    public $total;
    public $avg;
    public $grade;
    
    public function __construct($name, $kor, $eng, $mat)
    {
        $this->name = $name;
        $this->kor = $kor;
        $this->eng = $eng;
        $this->mat= $mat;
    }

    public function calc()
    {
        $this->total = $this->kor + $this->eng + $this->mat;
        $this->avg = $this->total/3;
        if($this->avg>=90) 
            $this->grade="수";
        else if($this->avg>=80) 
            $this->grade="우";
        else if($this->avg>=70) 
            $this->grade="미";
        else if($this->avg>=60) 
            $this->grade="양";
        else  
            $this->grade="가";
    }

    public function display(){
        echo "$this->name $this->kor $this->eng $this->mat $this->total $this->grade<br>";
    }
};


class ScoreManager
{
    private $scoreList;
    public function __construct(){   
        $this->scoreList = Array();
        array_push($this->scoreList, new Score("홍길동", 90, 80, 70));
        array_push($this->scoreList, new Score("장길산", 90, 80, 100));
        array_push($this->scoreList, new Score("임꺽정", 80, 80, 70));
        array_push($this->scoreList, new Score("홍경래", 90, 90, 70));
        array_push($this->scoreList, new Score("강감찬", 100, 100, 100));
    }

    public function calc()
    {
        for ($i=0; $i<count($this->scoreList); $i++)
        {
            //print_r($this->scoreList[$i]);

            $this->scoreList[$i]->calc();
        }
    }

    public function display()
    {
        for ($i=0; $i<count($this->scoreList); $i++)
        {
            $this->scoreList[$i]->display();
        }
    }
};

$score = new ScoreManager();
$score->calc();
$score->display();

?>