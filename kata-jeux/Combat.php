<?php
require_once "Personnage.php";
class Combat extends Personnage {
    public static function attaquer($attaquant,$defenseur){
        $degat = $attaquant->pointAttaque - $defenseur->pointDefense;
        if($degat < 0){
            $degat = 0;
            echo "L'attaque vous a tuer";
        }
        $degat = $degat - $defenseur->sante ;

        echo $attaquant->nom . " a attaqué " . $defenseur->nom . " et lui a infligé : " . $degat . " points de dégâts.<br/>";
        echo "Santé restante de " . $defenseur->nom . ": " . $defenseur->sante . "<br/>";
    }
    public static function defendre($defenseur, $attaquant){
        $degat = $defenseur->sante - $attaquant->pointAttaque;
        if($degat < 0){
            $degat = 0;
            echo "L'attaque vous a tuer";
        }
        
        echo $defenseur->nom . " se défend contre l'attaque de " . $attaquant->nom . " et encaisse : " . $degat . " points de dégâts.<br/>";
        echo "Santé restante de " . $defenseur->nom . ": " . $defenseur->sante . "<br/>";    }

}
