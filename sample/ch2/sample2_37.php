<?php
//상속
class Shape 
{ 
    protected $width;
    protected $height; 
    protected $surface;

    public function __construct($width, $height) 
    { 
        $this->width = $width; 
        $this->height = $height; 
    } 

    public function draw()
    {
        echo "가로 : ". $this->width."<br>";
        echo "세로 : ". $this->height."<br>";
    }
} 

class Rectangle extends Shape 
{ 
    public function draw() 
    { 
        $this->surface = $this->height*$this->width;

        echo("<br>draw rectangle<br>");
        echo "가로 : ". $this->width."<br>";
        echo "세로 : ". $this->height."<br>";
        echo "면적 : ". $this->surface ."<br>"; 
    } 
} 

class Triangle extends Shape { 
    public function draw() 
    { 
        $this->surface = $this->height*$this->width/2;
        echo("<br>draw triangle<br>"); 
        echo "밑변 : ". $this->width."<br>";
        echo "높이 : ". $this->height."<br>"; 
        echo "면적 : ". $this->surface ."<br>"; 
    } 
}

$rect = new Rectangle( 100,40 );
$rect->draw();

$triangle = new Triangle( 100,40);
$triangle->draw();

?>
