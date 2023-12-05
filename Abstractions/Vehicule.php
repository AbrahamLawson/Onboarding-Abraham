<?php
abstract class Vehicule {
    protected $make;
    protected $model;
    public function __construct($make,$model){
        $this->make = $make;
        $this->model = $model;
    }
    abstract function Start();
    
}
class Car extends Vehicule {
    public function __construct($make,$model){
        parent:: __construct($make,$model);
       
    }
    public function Start(){
        echo $this->make. "Est allumer"." ". "Fait le".$this->model. '<br>';
    }
}
class Motorcycle extends Vehicule{
    public function __construct($make,$model){
        parent:: __construct($make,$model);
    }
    public function Start(){
        echo $this->make. "Est allumer"." ". "Fait le".$this->model;
      
    }
}