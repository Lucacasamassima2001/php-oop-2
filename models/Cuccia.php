<?php

class Cuccia extends Product{
    protected string $usato;
    public function __construct(string $name, string $category, int $price, string $usato){
        $this->usato = $usato;
        $this->setName($name);
        $this->setCategory($category);
        $this->setPrice($price);
    }
}

