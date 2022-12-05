<?php 

require "./ClasseJoueur.php";
require "./equipe.php";


//Equipe de France

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
$joueur11 = new Player(11, 'Koundé', 78, 45, 85, 84);
$joueur12 = new Player(12, 'Benzema', 78, 88, 39, 80);
$joueur13 = new Player(13, 'Rabiot', 80, 74, 77, 76);
$joueur14 = new Player(14, 'Walid', 99, 99, 99, 99);
$joueur15 = new Player(15, 'Tchouaméni', 83, 71, 82, 71);

//Equipe d'Angleterre

$rice = new Player(1, 'Rice', 83, 64, 82, 71);
$coady = new Player(2, 'Coady', 75, 58, 81, 49);
$foden = new Player(3, 'Foden', 60, 78, 56, 82);
$gallagher = new Player(4, 'Gallagher', 76, 77, 68, 76);
$grealish = new Player(5, 'Grealish', 69, 76, 44, 76);
$bellingham = new Player(6, 'Belligham', 80, 75, 77, 75);
$maguire = new Player(7, 'Maguire', 85, 58, 81, 49);
$pickford = new Player(8, 'Pickford', 81, 52, 78, 85);
$pope = new Player(9, 'Pope', 81, 50, 83, 81);
$sterling = new Player(10, 'Sterling', 67, 80, 45, 90);
$stones = new Player(11, 'Stones', 78, 52, 85, 73);
$alexander = new Player(12, 'Alexander-Arnold', 73, 69, 80, 76);
$walker = new Player(13, 'Walker', 85, 66, 83, 94);
$mount = new Player(14, 'Mount', 67, 81, 55, 74);

//Equipe dou Brazil

$jesus = new Player(1, 'Jesus', 75, 83, 41, 85);
$pedro = new Player(2, 'Pedro', 70, 83, 42, 71);
$neymar = new Player(3, 'Neymar', 61, 83, 37, 87);
$fred = new Player(4, 'Fred', 72, 68, 76, 77);
$alisson = new Player(5, 'Alisson', 90, 54, 85, 86);
$fabinho = new Player(6, 'Fabinho', 83, 69, 86, 66);
$danilo = new Player(7, 'Danilo', 80, 68, 82, 73);
$vinicius = new Player(8, 'Vinicius', 67, 79, 29, 95);
$antony = new Player(9, 'Antony', 70, 75, 40, 94);
$bruno = new Player(10, 'Bruno Guimaraes', 78, 68, 77, 70);
$barros = new Player(11, 'De Barros Ribeiro' ,83, 77, 49, 82);
$rodrygo = new Player(12, 'Rodrygo', 57, 77, 33, 89);
$dani = new Player(13, 'Dani Alves', 64, 73, 74, 71);
$casemiro = new Player(14, 'Casemiro', 90, 73, 87, 63);


$france = new Team('France', [$joueur1]);

$france->showListe();