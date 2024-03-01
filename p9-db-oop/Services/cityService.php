<?php

namespace Services;

require_once("./Models/City.php");

use Models\City;
use mysqli;

class CityService
{
    private $connection;

    function __construct()
    {
        $this->connection = new mysqli("localhost", "root", "", "world", 3307);
    }

    function __destruct()
    {
        $this->connection->close();
    }

    function getAllCities()
    {
        $db_result = $this->connection->query("SELECT * FROM `city`");
        $results = array();
        while ($row = $db_result->fetch_array()) {
            $city = $this->rowToCity($row);
            array_push($results, $city);
        }
        $db_result->free_result();
        return $results;
    }

    function getCityById($id)
    {
        $statement = $this->connection->prepare("SELECT * FROM `city` WHERE `ID` = ?");
        $statement->bind_param("i", $id);
        $statement->execute();
        $db_result = $statement->get_result();

        $row = $db_result->fetch_array();
        $city = $this->rowToCity($row);
        $db_result->free_result();
        return $city;
    }

    function getRandomCity()
    {
        $statement = $this->connection->prepare("SELECT * FROM city ORDER BY rand() LIMIT 1");
        $statement->execute();
        $db_result = $statement->get_result();

        $row = $db_result->fetch_array();
        $city = $this->rowToCity($row);
        $db_result->free_result();
        return $city;
    }

    function getCitiesByCountryCode($country)
    {
        $statement = $this->connection->prepare("SELECT * FROM `city` WHERE `CountryCode` = ?");
        $statement->bind_param("s", $country);
        $statement->execute();
        $db_result = $statement->get_result();

        $results = array();
        while ($row = $db_result->fetch_array()) {
            $city = $this->rowToCity($row);
            array_push($results, $city);
        }
        $db_result->free_result();
        return $results;
    }

    function getCitiesBySearchString($search)
    {
        if (strlen($search) > 0) {
            $search = "%$search%";
        }

        $statement = $this->connection->prepare("SELECT * FROM `city` WHERE `Name` LIKE ?");
        $statement->bind_param("s", $search);
        $statement->execute();
        $db_result = $statement->get_result();

        $results = array();
        while ($row = $db_result->fetch_array()) {
            $city = $this->rowToCity($row);
            array_push($results, $city);
        }
        $db_result->free_result();
        return $results;
    }

    function addCity($name, $countryCode, $district, $population)
    {
        $sql = "
        INSERT INTO city
        (Name, CountryCode, District, Population)
        VALUES
        (?, ?, ?, ?);
        ";
        $statement = $this->connection->prepare($sql);
        $statement->bind_param("sssi", $name, $countryCode, $district, $population);

        $statement->execute();

        $addedCity = new City(
            $statement->insert_id,
            $name,
            $countryCode,
            $district,
            $population
        );

        return $addedCity;
    }

    function updateCity($city)
    {
        $sql = "
        UPDATE `city`
        SET
            `Name` = ?,
            `CountryCode` = ?,
            `District` = ?,
            `Population` = ?
        WHERE `ID` = ?
        ";

        $name = $city->getName();
        $countryCode = $city->getCountryCode();
        $district = $city->getDistrict();
        $population = $city->getPopulation();
        $cityId = $city->getId();

        $statement = $this->connection->prepare($sql);
        $statement->bind_param(
            "sssii",
            $name,
            $countryCode,
            $district,
            $population,
            $cityId
        );

        $statement->execute();
    }

    function deleteCity($id)
    {
        $statement = $this->connection->prepare("DELETE FROM `city` WHERE `Id` = ?");
        $statement->bind_param("i", $id);
        $statement->execute();
    }

    private function rowToCity($row)
    {
        $city = new City(
            $row["ID"],
            $row["Name"],
            $row["CountryCode"],
            $row["District"],
            $row["Population"]
        );
        return $city;
    }
}
