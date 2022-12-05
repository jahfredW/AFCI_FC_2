<?php ob_start() ?>

<div class="w-100">
    <div class="row">
        <div class="col-3" style="border-right: 1px solid black;">
            <div class="row mt-3">
                <?php for($index = 0; $index < 11; $index++): ?>
                    <div class="col-12 border-right mt-2 text-center ">Joueur_<?= $index ?></div>
                <?php endfor ?>
            </div>
        </div>
        <div class="col-9 my-auto">
            <div class="row mt-2 text-center">
                <div class="col-4">Attaquant_1</div>
                <div class="col-4">Attaquant_2</div>
                <div class="col-4">Attaquant_3</div>
            </div>
            <div class="row mt-5 text-center">
                <div class="col-4">Milieu_1</div>
                <div class="col-4">Milieu_2</div>
                <div class="col-4">Milieu_3</div>
            </div>
            <div class="row mt-5 text-center">
                <div class="col-3">Défenseur_1</div>
                <div class="col-3">Défenseur_2</div>
                <div class="col-3">Défenseur_3</div>
                <div class="col-3">Défenseur_3</div>
            </div>
            <div class="row mt-5 text-center">
                <div class="col-12">Gardien</div>
            </div>
        </div>
    </div>
</div>






<?php 
$content = ob_get_clean(); 
$title = "Page de connexion";
require "../template.php";
?>