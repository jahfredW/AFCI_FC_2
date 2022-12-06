<?php ob_start() ?>

<?php
require "../../classes/ClasseJoueur.php";
require "../../classes/equipe.php";


// Equipe de tocards 


$chainz = new Player (1, "2Chainz", 57, 96, 61, 76);
$pac = new Player (2, "2Pac", 99, 99, 99, 99);
$johnmarston = new Player (3,"John Marston", 76, 94, 86,82);
$fredcrs = new Player (4, "Fred CRS", 100, 95, 99, 85);
$damien = new Player (5, "Damien El Crackito", 100, 95, 99, 85);
$lapuerta = new Player (6, "La Puerta L'impulsif", 100, 100, 100, 100) ;
$macrard = new Player (7, "Macrard Le Rusé", 41, 85, 99, 78);
$popsmoke = new Player (8, "Pop Smoke", 92, 100, 86, 92);
$scooter = new Player (9, "Scooter Man", 89, 83, 79, 100);
$suarez = new Player (10, "Suarez", 0, 0, 0, 0);
$syrine = new Player (11, "Syrine", 59, 70, 78, 82);
$tortue = new Player (12, "Tortue Clodo", 41, 56, 51, 63);
$travaux = new Player (13, "Walid le Bon Tuyau", 100, 95, 99, 85); 
$booba = new Player (14, "Booba", 75, 85, 81, 54);
$zemmour = new Player (15, "Le Z le Maléfique", 0, 0, 0, 0);

$cassos = new Team('CASSOS 4 LIFE IZI MONEY GANG F*CK DA COPS', [], [], [], [], []);
$cassos->setListeAttaquants($chainz);
$cassos->setListeAttaquants($damien);
$cassos->setListeAttaquants($travaux);


$cassos->setListeDefenseurs($pac);
$cassos->setListeDefenseurs($fredcrs);
$cassos->setListeDefenseurs($macrard);
$cassos->setListeDefenseurs($tortue);

$cassos->setListeRemplacant($booba);
$cassos->setListeRemplacant($suarez);
$cassos->setListeRemplacant($scooter);
$cassos->setListeRemplacant($popsmoke);



$cassos->setListeMilieux($johnmarston);
$cassos->setListeMilieux($lapuerta);
$cassos->setListeMilieux($syrine);

$cassos->setListeGoal($zemmour);


?>
<link rel="stylesheet" href="../style.css">
<div id="test" class="w-100">
    <div class="row">
    
        <div class="col-2 card">
            
            <div class="h2 text-center mt-2">Liste des Joueurs</div>
            <div class="row mt-3 fs-4">
                <?= $cassos->getListeAll() ?>
            </div>
        </div>
        <div class="col-10">
        <div class="text-center mx-auto mt-4">
                <img src="../../image/drapeau_cassos.png">
                <div class="h2 text-center mb-5">Equipe de Tocards <?php echo $cassos->getName() ?></div>
            </div>
            <div class="row mt-2 text-center d-flex justify-center">
                <?php $cassos->showListeAttaquants() ?>
            </div>
            <div class="row mt-5 text-center">
                <?php $cassos->showListeMilieux() ?>
            </div>
            <div class="row mt-5 text-center">
                 <?php $cassos->showListeDefenseurs() ?>
            <div class="row mt-5 text-center">
            <?php $cassos->showListeGoal() ?>
            </div>
        </div>
    </div>
</div>






<?php 
$content = ob_get_clean(); 
$title = "Page de connexion";
require "../template.php";
?>