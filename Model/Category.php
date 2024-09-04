<?php

// Classe categorie
class Category{

    // Variabili d'istanza
    public $name;
    public $icon;


    // Costruttore
    function __construct ($_name, $_icon){
        $this->name = $_name;
        $this->icon = $_icon;
    }
}

$dogCategory = new Category('Cane', '<i class="fa-solid fa-dog"></i>');
$catCategory = new Category('Gatto', '<i class="fa-solid fa-cat"></i>');