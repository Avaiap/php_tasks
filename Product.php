<?php
class Product {
    public string $name;
    public int $prise;
    public float $rating;
    public string $description;

    public function __construct(string $name, int $prise, float $rating, string $description)
    {
        $this->name = $name;
        $this->prise = $prise;
        $this->rating = $rating; 
        $this->description = $description;
    }

    public function printInfo(){
        echo  "Название: " . $this->name . "<br>" 
            . "Цена: " . $this->prise . "<br>" 
            . "Рейтинг: " . $this->rating . "<br>" 
            . "Описание: " . $this->description . "<br>";
    }
}