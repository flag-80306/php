<?php

namespace Models;

class City
{
    private $id;
    private $name;
    private $countryCode;
    private $district;
    private $population;

    function __construct($id, $name, $countryCode, $district, $population)
    {
        $this->id = $id;
        $this->name = $name;
        $this->countryCode = $countryCode;
        $this->district = $district;
        $this->population = $population;
    }

    function getId()
    {
        return $this->id;
    }

    function setId($id)
    {
        $this->id = $id;
    }

    function getName()
    {
        return $this->name;
    }

    function setName($name)
    {
        $this->name = $name;
    }

    function getCountryCode()
    {
        return $this->countryCode;
    }

    function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
    }

    function getDistrict()
    {
        return $this->district;
    }

    function setDistrict($district)
    {
        $this->district = $district;
    }

    function getPopulation()
    {
        return $this->population;
    }

    function setPopulation($population)
    {
        $this->population = $population;
    }
}
