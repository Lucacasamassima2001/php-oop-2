<?php

class Cibo extends Product{
    protected string $scadenza;
    public function __construct(string $name, string $category, int $price,string $urlimg, string $scadenza){
        $this->scadenza = $scadenza;
        $this->setName($name);
        $this->setCategory($category);
        $this->setPrice($price);
        $this->setImg($urlimg);
    }
}