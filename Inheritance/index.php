<?php
require_once "Shape.php";
$circle = new Circle("Jaune",9);
$rectangle = new Rectangle("Vert",5,10);
echo "La surface du cercle est de ". $circle->areaCalculate()."   ";

echo "La surface du Rectangle est de ". $rectangle->areaCalculate();