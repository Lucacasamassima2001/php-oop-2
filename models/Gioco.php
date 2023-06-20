<?php

class Gioco extends Product{
    protected string $punteggio;
    public function __construct(string $name, string $category, int $price,string $urlimg, string $punteggio){
        $this->punteggio = $punteggio;
        $this->setName($name);
        $this->setCategory($category);
        $this->setPrice($price);
        $this->setImg($urlimg);
    }
    public function getPoints(){
        return $this->punteggio;
    }
}