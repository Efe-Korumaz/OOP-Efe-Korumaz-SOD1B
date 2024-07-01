<?php

class Product
{
    public function __construct(public $price, public $currency = "$", public $name = "Een spel", public $category = "dranken", public $rating = "3")
    {
        $this->name = ucfirst($name);
        $this->price = $price;
        $this->currency = $currency;
        $this->category = $category;
        $this->rating = $rating;
    }

    public function formatPrice()
    {
        return $this->currency . ' ' . number_format($this->price, 2);
    }
}

$game1 = new Product(9.2, '$', 'Een spel', 'dranken', 3);

$game2 = new Product(59, '$', 'Bourbon', 'dranken', 4.3);

$game3 = new Product(13.4, '$', 'Tequila', 'dranken', 5);

echo $game1->name . '<br>';
echo $game1->formatPrice() . ' ' . $game1->category . ' ' . $game1->rating . '<br>';
var_dump($game1);

echo $game2->name . '<br>';
echo $game2->formatPrice() . ' ' . $game2->category . ' ' . $game2->rating . '<br>';
var_dump($game2);

echo $game3->name . '<br>';
echo $game3->formatPrice() . ' ' . $game3->category . ' ' . $game3->rating . '<br>';
var_dump($game3);
?>
