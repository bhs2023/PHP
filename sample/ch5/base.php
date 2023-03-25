<?php 
class Position {
    private $x;
    private $y;

    public setX($x)
    {
        $this->x = $x;
    }
    public getX()
    {
        return $x;
    }
    public setY($x)
    {
        $this->y = $y;
    }
    public getY()
    {
        return $y;
    }
}

//객체 생성
$curPos = new Position();
$curPos->setX(5);
$curPos->setY(10);

echo "x = ".$curPos->getX(). " y = ".$curPos->getY();
?>
