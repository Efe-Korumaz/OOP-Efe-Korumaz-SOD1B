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
}

$game1 = new Product(9.2, 'bourbon');

$game2 = new Product(59.99, 'mario kart', 'games');

$game3 = new Product(13.4, 'tequila', 'dranken', '5');

echo $game1->name . '<br>';
echo $game1->price . ' ' . $game1->category . ' ' . $game1->rating . '<br>';
var_dump($game1);

echo $game2->name . '<br>';
echo $game2->price . ' ' . $game2->category . ' ' . $game2->rating . '<br>';
var_dump($game2);

echo $game3->name . '<br>';
echo $game3->price . ' ' . $game3->category . ' ' . $game3->rating . '<br>';
var_dump($game3);

