<?php

// Classe prodotti
class product{

    // Variabili d'istanza
    public $name;
    public $img;
    public $price;
    public $category;
    public $description;


    // Costruttore
    function __construct (string $_name, string $_img, float $_price, Category $_category, string $_description){
        $this->name = $_name;
        $this->img = $_img;
        $this->price = $_price;
        $this->category = $_category;
        $this->description = $_description;
    }

    // Funzione per generare le card
    public function createdCard(){
        echo "
            <div class='product-card'>
                <img src='{$this->img}' alt='{$this->name}' />
                <h3>{$this->name}</h3>
                <p>Prezzo: \${$this->price}</p>
                <p>Categoria: {$this->category->name} {$this->category->icon}</p>
                <p>Descrizione: {$this->description}</p>
            </div>";
    }
}

