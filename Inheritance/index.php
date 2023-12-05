<?php
require_once "Shape.php";
$circle = new Circle("Rose",20);
$rectangle = new Rectangle("Or",2,5);
echo "La surface du cercle est :"  . $circle->areaCalculate();

echo "La surface du Rectangle est :" .$rectangle->areaCalculate();