<?php
class User{
    public string $login;
    public int $password;
    public array $basket;

    public function __construct(string $login, int $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function addToBasket(Product $nameProduct){
        $this->basket[] = $nameProduct;
    }
    
    public function printProductsInTheBasketInfo(){
        foreach ($this->basket as $category => $product) {
            echo "Ключ: " . $category . "<br>" . "<br>" . "Товар: " . "<br>" . $product->printInfo();
        }
        // echo "Корзина $this->login";
    }
}