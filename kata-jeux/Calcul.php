<?php
class Calcul{
    public function division(int $nmb1, int $nmb2){
        
        
    
           if($nmb2 === 0){
           
            throw new Exception("Imposible de diviser un nombre par zero");
           }
           return $nmb1 / $nmb2;
        }
        
    }
