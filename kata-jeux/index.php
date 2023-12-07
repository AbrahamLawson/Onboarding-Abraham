<?php
require_once "Combat.php";
require_once "Personnage.php";
$pikachu = new Personnage("Pikachu",100,200,100);
$ronflex = new Personnage("Ronflex",900,20,400);

$pikachu->getStatistique();
$ronflex->getStatistique();

Combat::attaquer($pikachu,$ronflex);
Combat::defendre($ronflex,$pikachu);