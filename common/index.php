<?php ob_start() ?>




<?php 
$content = ob_get_clean(); 
$title = "mon site d'exos";
require "template.php";
?>