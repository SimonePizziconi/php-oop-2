<?php

class Toy extends Product
{

    public $material;

    function __construct(string $_name, string $_img, float $_price, Category $_category, string $_description, string $_material)
    {
        parent::__construct($_name, $_img, $_price, $_category, $_description);

        $this->material = $_material;
    }
}
