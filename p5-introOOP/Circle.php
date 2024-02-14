<?php
class Circle
{
    var $radius;

    function __construct($radius)
    {
        $this->radius = $radius;
    }

    function area()
    {
        return pi() * pow($this->radius, 2);
    }

    function circumference()
    {
        return 2 * pi() * $this->radius;
    }
}
