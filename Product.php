<?php
class Product {
    private string $name;
    private int $prise;
    private float $rating;
    private string $description;

    public function __construct(string $name, int $prise, float $rating, string $description)
    {
        $this->name = $name;
        $this->prise = $prise;
        $this->rating = $rating; 
        $this->description = $description;
    }

    public function printInfo(): void {
        echo  "Название: " . $this->name . "<br>" 
            . "Цена: " . $this->prise . "<br>" 
            . "Рейтинг: " . $this->rating . "<br>" 
            . "Описание: " . $this->description . "<br>";
    }
}

