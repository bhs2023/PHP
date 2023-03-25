<?php
class Person
{
    public $id;
    public $name;
    public $phone;
    public $address;

    public function __construct($id=0, $name="", $phone="", $address="")
    {
        $this->id = $id;
        $this->name = $name;
        $this->phone = $phone;
        $this->address = $address;
    }
}

class PersonManager
{
    public $personList;
    public function __construct()
    {
        $this->personList= Array();

        array_push($this->personList, new Person(1, "홍길동", "010-0000-0000", "대학1길"));
        array_push($this->personList, new Person(2, "임꺽정", "010-1111-1111", "대학2길"));
        array_push($this->personList, new Person(3, "장길산", "010-2222-2222", "대학3길"));
        array_push($this->personList, new Person(4, "홍경래", "010-3333-3333", "대학4길"));
        array_push($this->personList, new Person(5, "이징옥", "010-4444-4444", "대학5길"));
        
     
    }

    public function output()
    {
        echo "<table width='80%' border=1 cellspacing=0>";
        for($i=0; $i<count($this->personList); $i++)
        {
            echo "<tr>";
            echo "<td width='50px'>".$this->personList[$i]->id."</td>";
            echo "<td width='120px'>".$this->personList[$i]->name."</td>";
            echo "<td width='160px'>".$this->personList[$i]->phone."</td>";
            echo "<td width='*'>".$this->personList[$i]->address."</td>";
            echo "</tr>";
        }
        echo"</table>";
    }

    public function append($name="", $phone="", $address="")
    {
        $temp = count($this->personList)-1;//배열 맨 마지막 인덱스를 가져온다 
        $id = $this->personList[$temp]->id+1; //맨 마지막에 있는 id값에 1을 더한다 

        array_push($this->personList, new Person($id, $name, $phone, $address));
    }

    public function modify($id="", $name="", $phone="", $address="")
    {
        if ($id < count($this->personList))
        {
            $this->personList[$id]=new Person($id, $name, $phone, $address);
        }
    }

    public function delete($id=0)
    {
        if ($id < count($this->personList))
        {
            $del=array_splice($this->personList,$id,1);
        }
    }
}

$personManager = new PersonManager();
echo "<br>--------- 원래 데이터 -----------<br>";
$personManager->output();


$personManager->append("송강정철", "010-6666-6666", "대학6길");
echo "<br>--------- 데이터 추가후-----------<br>";
$personManager->output();

$personManager->modify(0, "", "010-6666-6666", "대학6길");
echo "<br>--------- 데이터 수정후-----------<br>";
$personManager->output();

$personManager->delete(0);
echo "<br>--------- 데이터 삭제후-----------<br>";
$personManager->output();
?>
