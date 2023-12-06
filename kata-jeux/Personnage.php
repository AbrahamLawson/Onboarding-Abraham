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
    public function getStatistique():void{
        echo "Voici les statistiques du personnage ".$this->nom.":". "<br/>"."Santé:".$this->sante."<br/>". "Point d'attaque:".$this->pointAttaque."<br/>". "Point de défense".$this->pointDefense;
    }
}

