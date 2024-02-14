<?php
class Rectangle
{
    var $width;
    var $height;

    function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    function area()
    {
        return $this->width * $this->height;
    }

    function perimeter()
    {
        return 2 * ($this->width + $this->height);
    }

    static function printRectangle($rectangle)
    {
        echo "<hr>";
        echo "$rectangle->width x $rectangle->height";
        echo "<br>";
        echo "Area: " . $rectangle->area();
        echo "<br>";
        echo "Perimeter: " . $rectangle->perimeter();
        echo "<hr>";
    }
}
