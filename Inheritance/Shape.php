<?php
class Shape{
    protected $color;
    public function __construct( string $color){
        $this->color = $color;
    }
    
}
class Circle extends Shape {
    private $area;
    public function __construct($color, int $area){
        $this->area = $area;
        parent:: __construct($color);
       
    }
    public function getArea(){
        echo $this->area;
    }
    public function areaCalculate(){
       
        return $this->color. 3.14159 * $this->area * $this->area;
    }

}
class Rectangle extends Shape {
    private $height;
    private $width ;
    public function __construct($color, $height, $width){
        parent:: __construct($color);
        $this->height = $height;
        $this->width = $width; 
    }
    public function areaCalculate(){
        return  $this->color.$this->height * $this->width;
    }
}
