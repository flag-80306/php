<?php
require_once("./Pet.php");

class Dog extends Pet
{
    public function bark()
    {
        if ($this->getSize() > 10) {
            return "Woof Woof!";
        } else {
            return "yelp yelp...";
        }
    }
}
