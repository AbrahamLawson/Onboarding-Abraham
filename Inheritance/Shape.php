<?php
class Shape{
    protected $color;
    protected $area;
    public function __construct($color,$area){
        $this->color = $color;
        $this->area = $area;
    }
}
class Circle extends Shape {
    public function __construct($color,$area){
        parent:: __construct($color,$area);
       
    }
    public function areaCalculate(){
       
        return $this->color. 3.14159 * $this->area * $this->area;
    }

}
class Rectangle extends Shape {
    protected $height;
    protected $width ;
    public function __construct($color, $height, $width){
        parent:: __construct($color, $height,$width);
        $this->height = $height;
        $this->width = $width; 
    }
    public function areaCalculate(){
        return  $this->color.$this->height * $this->width;
    }
}
