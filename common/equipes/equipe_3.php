<?php ob_start() ?>

<?php
require "../../classes/ClasseJoueur.php";
require "../../classes/equipe.php";


$jesus = new Player(1, 'Jesus', 75, 83, 41, 85);
$pedro = new Player(2, 'Pedro', 70, 83, 42, 71);
$neymar = new Player(3, 'Neymar', 61, 83, 37, 87);
$fred = new Player(4, 'Fred', 72, 68, 76, 77);
$alisson = new Player(5, 'Alisson', 90, 54, 85, 86);
$fabinho = new Player(6, 'Fabinho', 83, 69, 86, 66);
$danilo = new Player(7, 'Danilo', 80, 68, 82, 73);
$vinicius = new Player(8, 'Vinicius', 67, 79, 29, 95);
$antony = new Player(9, 'Antony', 70, 75, 40, 94);
$bruno = new Player(10, 'Bruno Gyumaraes', 78, 68, 77, 70);
$barros = new Player(11, 'De Barros Ribeiro' ,83, 77, 49, 82);
$rodrygo = new Player(12, 'Rodrygo', 57, 77, 33, 89);
$dani = new Player(13, 'Dani Alves', 64, 73, 74, 71);
$casemiro = new Player(14, 'Casemiro', 90, 73, 87, 63);

$bresil = new Team('Bresil', [], [], [], [], [], 'drapeau_bresil');
$bresil->setListeAttaquants($neymar);
$bresil->setListeAttaquants($antony);
$bresil->setListeAttaquants($vinicius);


$bresil->setListeDefenseurs($jesus);
$bresil->setListeDefenseurs($pedro);
$bresil->setListeDefenseurs($alisson);
$bresil->setListeDefenseurs($barros);

$bresil->setListeRemplacant($rodrygo);
$bresil->setListeRemplacant($dani);
$bresil->setListeRemplacant($casemiro);


$bresil->setListeMilieux($fred);
$bresil->setListeMilieux($danilo);
$bresil->setListeMilieux($fabinho);

$bresil->setListeGoal($bruno);

$bresil->render();
?>


<?php 
$content = ob_get_clean(); 
$title = "Page de connexion";
require "../template.php";
?>