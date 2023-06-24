<?php
class Product {
    private string $name;
    private int $prise;
    private float $rating;
    private string $description;

    public function __construct(string $name, int $prise, float $rating, string $description) {
        $this->name = $name;
        $this->prise = $prise;
        $this->rating = $rating; 
        $this->description = $description;
    }

    public function printInfo(): void {
        echo "Товар: " . "<br>";
        echo  "Название: " . $this->name . "<br>" 
            . "Цена: " . $this->prise . "<br>" 
            . "Рейтинг: " . $this->rating . "<br>" 
            . "Описание: " . $this->description . "<br>";
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function setPrise(int $prise): void {
        $this->prise = $prise;
    }

    public function setRating(float $rating): void {
        $this->rating = $rating;
    }

    public function setDescription(string $description): void {
        $this->description = $description;
    }

    public function getName(string $name) {
        return $this->name;
    }
    
    public function getPrise(int $prise) {
        return $this->prise;
    }

    public function getRating(float $rating) {
        return $this->rating;
    }

    public function getDescription(string $description) {
        return $this->description;
    }
}

