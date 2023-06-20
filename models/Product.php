<?php

class Product{
    public string $name;
    public string $category;
    public int $price;
    public string $urlimg;

    public function __construct(string $name, string $category, int $price, string $urlimg){
        $this->setName($name);
        $this->setCategory($category);
        $this->setPrice($price);
        $this->setImg($urlimg);
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
    public function getImg(){
        return $this->urlimg;
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
    public function setImg($urlimg){
        $this->urlimg = $urlimg;
    }

    public function showCategory($category){
        if($this->category == 'cane'){
            return $this->category = '<i class="fa-solid fa-dog"></i>';
        }
        else if($this->category == 'gatto'){
            return $this->category = '<i class="fa-solid fa-cat"></i>';

        }
        else{
            return $this->category = '<i class="fa-solid fa-paw"></i>';
        }
    }
};