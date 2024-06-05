<?php

class Product
{
    public $name;
    public $price;

    public $category;

    public function setName($name)
    {
$this->name = strtolower($name);
    }

    public function setCategory($category)
    {
        $this->category = ucfirst($category);
    }

    public function formatPrice()
    {
        return number_format( $this->price, 2);
    }
    
}

$game1 = new product;
$game1->setName('fifa 2023');
$game1->price = 70;
$game1->setCategory('sport');

$game2 = new product();
$game2 ->setName( "hollow knight");
$game2->price = 15;
$game2->setCategory('metro vania');


$game3 = new product();
$game3->setName("pokemon");
$game3->price = 60;
$game3-> setCategory('rpg');


echo $game1-> name . $game1->formatPrice(). $game1->category . '<br>' ;
echo $game2->name . $game2->formatPrice(). $game2->category .'<br>';
echo $game3->name. $game3->formatPrice(). $game3->category . '<br>';
