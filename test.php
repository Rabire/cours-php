<?php
    include("./utilisateur.php");

    $robert = new utilisateur();

    $robert->vieillir();
    $robert->getAge();

?>