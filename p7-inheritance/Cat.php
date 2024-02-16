<?php
require_once("./Pet.php");

class Cat extends Pet
{
    private $favoriteFood;

    function __construct($name, $size, $favoriteFood)
    {
        $this->setName($name);
        $this->setSize($size);
        // $this->setFavoriteFood($favoriteFood);
        $this->favoriteFood = $favoriteFood;
    }

    function getFavoriteFood()
    {
        return $this->favoriteFood;
    }

    function setFavoriteFood($favoriteFood)
    {
        $this->favoriteFood = $favoriteFood;
    }
}
