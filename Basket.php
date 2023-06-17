<?php
class Basket{
    /**
     * @var Basket[]
     */
    private string $basketUser;
    private array $basket;

    public function addToBasket(Product $nameProduct): void{
        $this->basket[] = $nameProduct;
    } 

    public function printProductsInTheBasketInfo(): void {
        foreach ($this->basket as $category => $product) {
            echo "Ключ: " . $category . "<br>" . "<br>" . "Товар: " . "<br>" . $product->printInfo() . "<br>";
            // echo "Корзина пользователя : $this->login" . "<br>";
        }
    }
}