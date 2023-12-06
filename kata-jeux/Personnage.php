<?php
class Personnage{
    private string $nom;
    private int $sante;
    private int $pointAttaque;
    private int $pointDefense;
    public function __construct(string $nom,int $sante,int $pointAttaque,int $pointDefense){
        $this->nom = $nom;
        $this->sante = $sante;
        $this->pointAttaque = $pointAttaque;
        $this->pointDefense = $pointDefense;;
    } 
   
}

