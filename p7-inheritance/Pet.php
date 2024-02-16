<?php
class Pet
{
    private $name;
    private $size;

    function __construct($name, $size)
    {
        $this->name = $name;
        $this->size = $size;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        $this->size = $size;
    }
}
