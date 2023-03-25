<?php

//성적처리 - 객체지향 아닐때 
$dataList = Array();
function insertData($dataList)
{
    array_push($dataList, Array("name"=>'홍길동', "kor"=>90, "eng"=>80, "mat"=>80));
    array_push($dataList, Array("name"=>'임꺽정', "kor"=>90, "eng"=>80, "mat"=>70));
    array_push($dataList, Array("name"=>'장길산', "kor"=>80, "eng"=>80, "mat"=>80));
    array_push($dataList, Array("name"=>'홍경래', "kor"=>70, "eng"=>60, "mat"=>70));
    array_push($dataList, Array("name"=>'강감찬', "kor"=>100, "eng"=>100, "mat"=>100));

    return $dataList;
}


function calc($dataList)
{
    for ($i=0; $i<count($dataList); $i++)
    {
        $dataList[$i]["total"] = $dataList[$i]["kor"] + $dataList[$i]["eng"] + $dataList[$i]["mat"];
        $dataList[$i]["avg"]=$dataList[$i]["total"]/3;
        if($dataList[$i]["avg"]>=90) 
            $dataList[$i]["grade"]="수";
        else if($dataList[$i]["avg"]>=80) 
            $dataList[$i]["grade"]="우";
        else if($dataList[$i]["avg"]>=70) 
            $dataList[$i]["grade"]="미";
        else if($dataList[$i]["avg"]>=60) 
            $dataList[$i]["grade"]="양";
        else  
            $dataList[$i]["grade"]="가";
    }
}

function display($dataList)
{
    for ($i=0; $i<count($dataList); $i++)
    {
        foreach ($dataList[$i] as $key => $value) {
            echo $key." ".$value."&nbsp;&nbsp;&nbsp;";
        }
        echo "<br/>";
    }
}

$dataList = insertData($dataList);
calc($dataList);
display($dataList);


?>