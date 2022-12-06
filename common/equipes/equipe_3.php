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
$bruno = new Player(10, 'Bruno Guimaraes', 78, 68, 77, 70);
$barros = new Player(11, 'De Barros Ribeiro' ,83, 77, 49, 82);
$rodrygo = new Player(12, 'Rodrygo', 57, 77, 33, 89);
$dani = new Player(13, 'Dani Alves', 64, 73, 74, 71);
$casemiro = new Player(14, 'Casemiro', 90, 73, 87, 63);

$bresil = new Team('Bresil', [], [], [], [], []);
$bresil->setListeAttaquants($neymar);
$bresil->setListeAttaquants($fabinho);
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
$bresil->setListeMilieux($antony);

$bresil->setListeGoal($bruno);


?>
<link rel="stylesheet" href="../style.css">
<div id="test" class="w-100">
    <div class="row">
    
        <div class="col-2 card">
            
            <div class="h2 text-center mt-2">Liste des Joueurs</div>
            <div class="row mt-3 fs-4">
                <?= $bresil->getListeAll() ?>
            </div>
        </div>
        <div class="col-10">
        <div class="text-center mx-auto mt-4">
                <img src="../../image/drapeau_france.png">
                <div class="h2 text-center mb-5">Equipe de <?php echo $bresil->getName() ?></div>
            </div>
            <div class="row mt-2 text-center d-flex justify-center">
                <?php $bresil->showListeAttaquants() ?>
            </div>
            <div class="row mt-5 text-center">
                <?php $bresil->showListeMilieux() ?>
            </div>
            <div class="row mt-5 text-center">
                 <?php $bresil->showListeDefenseurs() ?>
            <div class="row mt-5 text-center">
            <?php $bresil->showListeGoal() ?>
            </div>
        </div>
    </div>
</div>






<?php 
$content = ob_get_clean(); 
$title = "Page de connexion";
require "../template.php";
?>