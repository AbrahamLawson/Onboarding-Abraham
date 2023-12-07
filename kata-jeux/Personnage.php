<?php
 class Personnage{
     protected string $nom;
     protected int $sante;
     protected int $pointAttaque;
     protected int $pointDefense;
     public function __construct(string $nom,int $sante ,int $pointAttaque ,int $pointDefense){
         $this->nom = $nom;
         $this->sante = $sante;
         $this->pointAttaque = $pointAttaque;
         $this->pointDefense = $pointDefense;;
     } 
     public function getStatistique():void{
         echo "Voici les statistiques du personnage ".$this->nom.":". "<br/>"."Santé:".$this->sante."<br/>". "Point d'attaque:".$this->pointAttaque."<br/>". "Point de défense".$this->pointDefense. "<br/>"."<br/>";
     }
 }