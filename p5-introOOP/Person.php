<?php
class Person
{
    var $name;
    var $age;
    var $city;

    function __construct($name, $age, $city)
    {
        $this->name = $name;
        $this->age = $age;
        $this->city = $city;
    }

    function greeting()
    {
        return "Hello I am $this->name and  I am from $this->city 😇";
    }

    function printGreeting()
    {
        echo $this->greeting();
    }
}
