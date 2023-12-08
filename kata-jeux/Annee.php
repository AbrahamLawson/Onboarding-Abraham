<?php
class Annee{
    public function __construct(int $annee){
        $this->annee = $annee;
    }
    public function isBisextil(){
      return  $this->annee % 4 == 0 && $this->annee % 100 !== 0 || $this->annee % 400 == 0 ;
     
      
    }
}