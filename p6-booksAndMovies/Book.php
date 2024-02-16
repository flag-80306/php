<?php
class Book
{
    private $title;
    private $author;
    private $price;

    function __construct($title, $author, $price)
    {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }

    function getTitle()
    {
        return $this->title;
    }

    function setTitle($title)
    {
        $this->title = $title;
    }

    function getAuthor()
    {
        return $this->author;
    }

    function setAuthor($author)
    {
        $this->author = $author;
    }

    function getPrice()
    {
        return $this->price;
    }

    function setPrice($price)
    {
        $this->price = $price;
    }

    function details()
    {
        return "Title: $this->title, Author: $this->author, Price: $this->price&euro;";
    }
}
