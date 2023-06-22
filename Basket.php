<?php
class Basket{
    private array $basket;
    private string $userName;

    public function addToBasket(Product $nameProduct): void {
        $this->basket[] = $nameProduct;
    } 

    public function printProductsInTheBasketInfo(): void {
        foreach ($this->basket as $category => $product) {
            echo "Ключ: " . $category . "<br>" . "<br>" . $product->printInfo() . "<br>";
            echo "Корзина пользователя : $this->userName" . "<br>";
        }
    }
}