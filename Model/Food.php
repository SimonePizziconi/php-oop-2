<?php

// Creazione classe estesa per i prodotti
class Food extends Product {

    public $type;
    public $size;

    function __construct(string $_name, string $_img, float $_price, Category $_category, string $_description, string $_type, string $_size){
        parent::__construct($_name, $_img, $_price, $_category, $_description);
        
        $this->type = $_type;
        $this->size = $_size;
    }
}