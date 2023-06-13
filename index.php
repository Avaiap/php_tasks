<?php
//----------------------------------------------------------------------------------------
//Подключаем файлы
include 'C:\занятия по php\php\utilits\Product.php';
include 'C:\занятия по php\php\utilits\Category.php';
include 'C:\занятия по php\php\utilits\User.php';

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
$outerWear->addToCategory($whiteTShirt);
$outerWear->addToCategory($blackTShirt);
$shoes->addToCategory($airJordan1);
$shoes->addToCategory($leatherShoes);

//Выводим каталог продуктов 
$outerWear->printAllProductInfo();
$shoes->printAllProductInfo();

//Создаём новых пользователей
$bob = new User('Боб', 123456);
$john = new User('Джонни', 654321);

//Добавляем товары в корзину пользователям
$bob->addToBasket($blackTShirt);
$bob->addToBasket($airJordan1);
$john->addToBasket($whiteTShirt);
$john->addToBasket($leatherShoes);

//Выводим товары из корзины пользователя на экран
$bob->printProductsInTheBasketInfo();