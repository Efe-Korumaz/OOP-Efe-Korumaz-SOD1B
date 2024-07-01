<?php

class Product
{
    public $name;
    public $price;
    public $category;
    public $rating;

    public function __construct($price, $name = "Een spel", $category = "dranken", $rating = "3")
    {
        $this->name = ucfirst($name);
        $this->price = $price;
        $this->category = $category;
        $this->rating = $rating;
    }

    public function formatPrice()
    {
        return number_format($this->price, 2);
    }
    public function getProduct()
    {
        return "het product" . " " . $this->name . " " . "Kost" . " " . $this->price;

    }
}

$game1 = new Product(9.2, 'bourbon', 'dranken', '4');

$game2 = new Product(59.99, 'vodka', 'dranken', '4.5');

$game3 = new Product(13.4, 'tequila', 'dranken', '5');

echo $game1->getProduct() . "<br>";
echo $game2->getProduct() . "<br>";
echo $game3->getProduct() . "<br>";


