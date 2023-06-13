<?php
class Category {
    public array $category;

    public function addToCategory(Product $nameProduct){
        $this->category[] = $nameProduct;
    }

    public function printAllProductInfo(){
        foreach ($this->category as $category => $product) {
            echo "Ключ: " . $category . "<br>" . "<br>" . "Товар: " . "<br>" . $product->printInfo();
        }
    }
} 