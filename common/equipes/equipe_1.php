<?php ob_start() ?>

<?php
require "../../classes/ClasseJoueur.php";
require "../../classes/equipe.php";


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
$joueur12 = new Player(12, 'Benzema', 78, 88, 39, 80);
$joueur13 = new Player(13, 'Rabiot', 80, 74, 77, 76);
$joueur14 = new Player(14, 'Walid', 99, 99, 99, 99);
$joueur15 = new Player(15, 'Tchouaméni', 83, 71, 82, 71);

$france = new Team('France', [], [], [], [], []);
$france->setListeAttaquants($joueur3);
$france->setListeAttaquants($joueur6);
$france->setListeAttaquants($joueur8);


$france->setListeDefenseurs($joueur1);
$france->setListeDefenseurs($joueur2);
$france->setListeDefenseurs($joueur5);
$france->setListeDefenseurs($joueur11);

$france->setListeRemplacant($joueur12);
$france->setListeRemplacant($joueur13);
$france->setListeRemplacant($joueur14);
$france->setListeRemplacant($joueur15);


$france->setListeMilieux($joueur4);
$france->setListeMilieux($joueur7);
$france->setListeMilieux($joueur9);

$france->setListeGoal($joueur10);


?>

<div class="w-100">
    <div class="row">
        <div class="col-2" style="border-right: 1px solid black;">
            <div class="row mt-3">
                <?php for($index = 0; $index < count($listeJoueur); $index++): ?>
                    <div class="col-12 border-right mt-2 text-center ">
                        _<?= $index ?></div>
                <?php endfor ?>
            </div>
        </div>
        <div class="col-10 my-auto">
            <div class="row mt-2 text-center d-flex justify-center">
                <?php $france->showListeAttaquants() ?>
            </div>
            <div class="row mt-5 text-center">
                <?php $france->showListeMilieux() ?>
            </div>
            <div class="row mt-5 text-center">
                 <?php $france->showListeDefenseurs() ?>
            <div class="row mt-5 text-center">
            <?php $france->showListeGoal() ?>
            </div>
        </div>
    </div>
</div>






<?php 
$content = ob_get_clean(); 
$title = "Page de connexion";
require "../template.php";
?>