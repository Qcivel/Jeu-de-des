<?php

include './Game/Des.php';
include './Game/Joueur.php';
include './Game/Partie.php';

$Pierre = new Joueur("Pierre", 0, new Des(6,0));
$Paul = new Joueur("Paul", 0, new Des(6,0));
$partie = new Partie($Pierre, $Paul, 5,0,0);


echo $partie->lancerPartie() . "\n";
