
<?php ob_start() ?>

<?php
// requires
require_once(__DIR__.'/class.php');
require_once(__DIR__.'/functions.php');
?>

<!-- html formulaire -->
<div class="w-100">
    <div class="mx-auto w-25 text-center mb-2">
        <form>
            <button name="submit" type="submit" class="btn btn-secondary">Liste des stagiaires</button>
        </form>
    </div>
</div>

<!-- main -->
<?php 

// stagiaires building
$stagiaire = new Stagiaire('Fred', 'Gruwe');
$stagiaire2 = new Stagiaire('Manon', 'Denolf');
$stagiaire3 = new Stagiaire('Kesary', 'Pavaday');
$stagiaire4 = new Stagiaire('Clement', 'Carlier');

// enterprise building
$entreprise = new Entreprise("afci", array());
 
// enterprise add employes
$entreprise->addEmploye($stagiaire);
$entreprise->addEmploye($stagiaire2);
$entreprise->addEmploye($stagiaire3);
$entreprise->addEmploye($stagiaire4);

// sorted liste outputing
$listeStagiaire = $entreprise->sortEmployeListe();

// draw the array on client UI
$drawer = new Drawer($listeStagiaire);

// browser checking if GLOBAL GET ARRAY is isset
checkGet($drawer);

// build buffer
$content = ob_get_clean();

// build title
$title = "Bienvenue à " . $entreprise->getName(). " !";
 
require "../common/template.php";
?>