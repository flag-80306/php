<?php
class Movie
{
    private $title;
    private $genre;
    private $price;

    function __construct($title, $genre, $price)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->price = $price;
    }

    function details()
    {
        return "Title: $this->title, Genre: $this->genre, Price: $this->price&euro;";
    }
}
