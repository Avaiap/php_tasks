<?php
class Category {
    /**
     * @var Categories[]
     */
    private array $categories; 

    public function add(Product $product): void {
        $this->categories[] = $product;
    }

    public function printAllProductInfo(): void {
        foreach ($this->categories as $categories => $product) {
            echo "Ключ: " . $categories . "<br>" . "<br>" . "Товар: " . "<br>" . $product->printInfo();
        }
    }
} 

