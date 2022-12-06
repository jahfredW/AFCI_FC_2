<?php ob_start() ?>

<?php
require "../../classes/ClasseJoueur.php";
require "../../classes/equipe.php";

//Equipe d'Angleterre

$rice = new Player(1, 'Rice', 83, 64, 82, 71);
$coady = new Player(2, 'Coady', 75, 58, 81, 49);
$foden = new Player(3, 'Foden', 60, 78, 56, 82);
$gallagher = new Player(4, 'Gallagher', 76, 77, 68, 76);
$grealish = new Player(5, 'Grealish', 69, 76, 44, 76);
$bellingham = new Player(6, 'Bellingham', 80, 75, 77, 75);
$maguire = new Player(7, 'Maguire', 85, 58, 81, 49);
$pickford = new Player(8, 'Pickford', 81, 52, 78, 85);
$pope = new Player(9, 'Pope', 81, 50, 83, 81);
$sterling = new Player(10, 'Sterling', 67, 80, 45, 90);
$stones = new Player(11, 'Stones', 78, 52, 85, 73);
$alexander = new Player(12, 'Alexander-Arnold', 73, 69, 80, 76);
$walker = new Player(13, 'Walker', 85, 66, 83, 94);
$mount = new Player(14, 'Mount', 67, 81, 55, 74);

$angleterre = new Team('Angleterre', [], [], [], [], []);
$angleterre->setListeAttaquants($grealish);
$angleterre->setListeAttaquants($foden);
$angleterre->setListeAttaquants($sterling);


$angleterre->setListeDefenseurs($maguire);
$angleterre->setListeDefenseurs($alexander);
$angleterre->setListeDefenseurs($walker);
$angleterre->setListeDefenseurs($stones);

$angleterre->setListeRemplacant($coady);
$angleterre->setListeRemplacant($gallagher);
$angleterre->setListeRemplacant($pope);


$angleterre->setListeMilieux($mount);
$angleterre->setListeMilieux($bellingham);
$angleterre->setListeMilieux($rice);

$angleterre->setListeGoal($pickford);


?>

<div class="w-100">
    <div class="row">
    
        <div class="col-2 card">
            
            <div class="h2 text-center mt-2">Liste des Joueurs</div>
            <div class="row mt-3 fs-4">
                <?= $angleterre->getListeAll() ?>
            </div>
        </div>
        <div class="col-10">
        <div class="text-center mx-auto mt-4">
                <img src="../../image/drapeau_angleterre.png">
                <div class="h2 text-center mb-5">Equipe de <?php echo $angleterre->getName() ?></div>
            </div>
            <div class="row mt-2 text-center d-flex justify-center">
                <?php $angleterre->showListeAttaquants() ?>
            </div>
            <div class="row mt-5 text-center">
                <?php $angleterre->showListeMilieux() ?>
            </div>
            <div class="row mt-5 text-center">
                 <?php $angleterre->showListeDefenseurs() ?>
            <div class="row mt-5 text-center">
            <?php $angleterre->showListeGoal() ?>
            </div>
        </div>
    </div>
</div>






<?php 
$content = ob_get_clean(); 
$title = "Page de connexion";
require "../template.php";
?>