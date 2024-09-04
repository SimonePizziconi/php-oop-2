<?php

class Category{

    // Variabili d'istanza
    public $name;
    public $icon;
    public $age;


    // Costruttore
    function __construct ($_name, $_age){
        $this->name = $_name;
        $this->age = $_age;
    }
}

function getInfo(){
    return  $this->name . ' ' . $this->age;
}