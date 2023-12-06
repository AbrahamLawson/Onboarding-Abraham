<?php
abstract class Vehicule {
    protected string $make;
    protected string $model;
    public function __construct( string $make,string $model){
        $this->make = $make;
        $this->model = $model;
    }
    abstract function Start():void;
    
}
class Car extends Vehicule {

    public function Start():void{
        
        echo $this->make. "&nbsp". "est allumer"." ". "Fabriquer le".$this->model. '<br>';
    }
}
class Motorcycle extends Vehicule{
   
    public function Start():void{
        echo $this->make. "&nbsp". "est allumer"." ". "Fabriquer le".$this->model;
      
    }
}

