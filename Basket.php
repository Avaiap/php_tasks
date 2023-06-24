<?php
class Basket{
    private array $basket;
    private string $userName;

    public function __construct(string $userName)
    {
        $this->userName = $userName;
    }

    public function addToBasket(Product $nameProduct): void {
        $this->basket[] = $nameProduct;
    } 

    public function printProductsInTheBasketInfo(): void {
        echo "Корзина пользователя : $this->userName" . "<br>" . "<br>";
        foreach ($this->basket as $category => $product) {
            echo "Ключ: " . $category . "<br>" . $product->printInfo() . "<br>";
        }
    }

    public function setUserName(string $userName): void {
        $this->userName = $userName;
    }

    public function getUserName(string $userName) {
        return $this->userName;
    }
}