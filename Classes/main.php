<?php 

require "./ClasseJoueur.php";
require "./equipe.php";


$joueur1 = new Player(1, 'Varane', 80, 49, 85, 68);
$joueur2 = new Player(2, 'Pavard', 80, 56, 82, 68);
$joueur3 = new Player(3, 'Dembélé', 57, 78, 37, 94);
$joueur4 = new Player(4, 'Guendouzi', 81, 67, 78, 74);
$joueur5 = new Player(5, 'Hernandez', 83, 72, 78, 93);
$joueur6 = new Player(6,'Giroud', 79, 84, 43, 43);
$joueur7 = new Player(7,'Griezmann', 83, 88, 58, 86);
$joueur8 = new Player(8, 'Mbappé', 80, 91, 39, 98);
$joueur9 = new Player(9, 'Upamecano', 82, 44, 81, 83);
$joueur10 = new Player(10, 'Lloris', 84, 61, 83, 88);
$joueur11 = new Player (11, 'Koundé', 78, 45, 85, 84);

$france = new Team('France', [], [], [], []);
$france->setListeAttaquants($joueur3);
$france->setListeAttaquants($joueur6);
$france->setListeAttaquants($joueur8);

$france->setListeDefenseurs($joueur1);
$france->setListeDefenseurs($joueur2);
$france->setListeDefenseurs($joueur5);
$france->setListeDefenseurs($joueur11);

$france->setListeMilieux($joueur4);
$france->setListeMilieux($joueur7);
$france->setListeMilieux($joueur9);

$france->setListeGoal($joueur10);



$france->showListeGoal();





