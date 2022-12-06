

<?php ob_start() ?>
<link rel="stylesheet" href="../../style.css">

<div class="container text-center pt-4">
    <h1 id="title">Bienvenue A la coupe du monde des cassos !</h1>
</div>
<div id="photo_cassos" class="row text-center">
    <div class="col-3">
        <img class="img" src="../../image/fred CRS.png"  alt="..." >
    </div>
    <div class="col-3">
        <img class="img" src="../../image/Damien El Crackito.png"  alt="..." >
    </div>
    <div class="col-3">
        <img class='img' src="../../image/La Puerta L'impulsif.png"  alt="..." >
    </div>
    <div class="col-3">
        <img class="img" src="../../image/Syrine.png"  alt="..." >
    </div>
    
</div>



<?php 
$content = ob_get_clean(); 
require "../template.php";
?>