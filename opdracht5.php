<?php

class Product
{
    public $name;
    public $price;
    public $category;

    public function __construct($name, $price)
    {
        $this->name = strtolower($name);

        $this->price =$price;


    }



}

$game1 = new product('fifa 2023', 70);

$game2 = new product('hollow knight', 15);

$game3 = new product('pokemon', 60);

echo $game1-> name. $game1->price. '<br>';
echo $game2->name . $game2->price.'<br>';
echo $game3->name. $game3->price. '<br>';
