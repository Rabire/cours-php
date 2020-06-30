<?php

class utilisateur {
    private $id = 1;
    private $prenom = "Rabire";
    private $nom = "HAKIM";
    private $age = 20;

    
    function vieillir() {
        return $this->$age + 1; 
    }

    function getAge() {
        return $this->age;
    }


}


?>




