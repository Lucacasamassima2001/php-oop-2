<?php

class Product{
    protected string $name;
    protected string $category;
    protected int $price;

    public function __construct(string $name, string $category, int $price){
        $this->setName($name);
        $this->setCategory($category);
        $this->setPrice($price);

    }

    public function getName(){
        return $this->name;
    }
    public function getCategory(){
        return $this->category;
    }
    public function getPrice(){
        return $this->price;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setCategory($category){
        $this->category = $category;
    }

    public function setPrice($price){
        $this->price = $price;
    }
};