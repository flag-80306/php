<?php

namespace Models;

class Country
{
    private $code;
    private $name;
    private $continent;
    private $surfaceArea;
    private $population;
    private $officialLanguages;
    private $otherLanguages;

    function __construct($code, $name, $continent, $surfaceArea, $population, $officialLanguages, $otherLanguages)
    {
        $this->code = $code;
        $this->name = $name;
        $this->continent = $continent;
        $this->surfaceArea = $surfaceArea;
        $this->population = $population;
        $this->officialLanguages = $officialLanguages;
        $this->otherLanguages = $otherLanguages;
    }

    function getCode()
    {
        return $this->code;
    }

    function setCode($code)
    {
        $this->code = $code;
    }

    function getName()
    {
        return $this->name;
    }

    function setName($name)
    {
        $this->name = $name;
    }

    function getContinent()
    {
        return $this->continent;
    }

    function setContinent($continent)
    {
        $this->continent = $continent;
    }

    function getSurfaceArea()
    {
        return $this->surfaceArea;
    }

    function setSurfaceArea($surfaceArea)
    {
        $this->surfaceArea = $surfaceArea;
    }

    function getPopulation()
    {
        return $this->population;
    }

    function setPopulation($population)
    {
        $this->population = $population;
    }

    function getOfficialLanguages()
    {
        return $this->officialLanguages;
    }

    function setOfficialLanguages($officialLanguages)
    {
        $this->officialLanguages = $officialLanguages;
    }

    function getOtherLanguages()
    {
        return $this->otherLanguages;
    }

    function setOtherLanguages($otherLanguages)
    {
        $this->otherLanguages = $otherLanguages;
    }
}
