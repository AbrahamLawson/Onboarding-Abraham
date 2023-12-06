<?php
require_once "Shape.php";
$circle = new Circle("Rose",20);
$rectangle = new Rectangle("Or",2,5);
echo "La surface du cercle est : &nbsp"  . $circle->areaCalculate()."<br/>";

echo "La surface du Rectangle est : &nbsp" .$rectangle->areaCalculate()."<br/>";
$circle->getArea();
