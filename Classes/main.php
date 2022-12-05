<?php 

require "./ClasseJoueur.php";
require "./equipe.php";


$joueur1 = new Player(1, 'Ronaldo', 'Christiano', 30, 50,'attaquant',12,20,50);
$france = new Team('France', [$joueur1]);

$france->showListe();