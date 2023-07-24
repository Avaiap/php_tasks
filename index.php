<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP tasks</title>
    </head>
    <body>
<?php
include 'C:\занятия по php\php\utilits\Product.php';
include 'C:\занятия по php\php\utilits\Category.php';
include 'C:\занятия по php\php\utilits\User.php';
include 'C:\занятия по php\php\utilits\Basket.php';
//----------------------------------------------------------------------------------------
//Создаём товары и добавляем в категории
$outerWear = new Category();
$shoes = new Category();

//Верхняя одежда
$whiteTShirt = new Product('Белая футболка', 1000, 5, 'Удобная классическая футболка');
$blackTShirt = new Product('Чёрная футболка', 1000, 5, 'Футболка чёрного цвета');

//Обувь
$airJordan1 = new Product('Аир Джордан классик', 9990, 5, 'Легендарная модель кроссовок');
$leatherShoes = new Product('Кожаные туфли', 15990, 5, 'Классические кожаные туфли чёрного цвета из гладкой кожи');

//Добавляем товары в категории
$outerWear->add($whiteTShirt);
$outerWear->add($blackTShirt);
$shoes->add($airJordan1);
$shoes->add($leatherShoes);

//Выводим каталог продуктов 
$outerWear->printAllProductInfo();
$shoes->printAllProductInfo();

//Создаём новых пользователей и корзины
$bob = new User('Боб', 123456);
$basketBob = new Basket('Bob');
$john = new User('Джонни', 654321);
$basketJohn = new Basket('John');

//Добавляем товары в корзину пользователям
$basketBob->addToBasket($blackTShirt);
$basketBob->addToBasket($airJordan1);
$basketJohn->addToBasket($whiteTShirt);
$basketJohn->addToBasket($leatherShoes);

//Выводим товары из корзины пользователя на экран
$basketBob->printProductsInTheBasketInfo();
?>
    </body>
</html>