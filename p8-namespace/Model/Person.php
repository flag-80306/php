<?php

namespace Model;

class Person
{
    private $name;
    private $city;

    function __construct($name, $city)
    {
        $this->name = $name;
        $this->city = $city;
    }

    function getName()
    {
        return $this->name;
    }

    function getCity()
    {
        return $this->city;
    }
}
