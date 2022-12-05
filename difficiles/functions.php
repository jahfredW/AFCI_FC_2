<?php 


function checkGet($object) : void
{
    if(isset($_GET['submit'])){
        echo '<div  class="container">';
        echo '<p class="text-center">Classement par ordre alphabétique<p>';
        echo $object->buildTab();
        echo '</div>';
    };
}
