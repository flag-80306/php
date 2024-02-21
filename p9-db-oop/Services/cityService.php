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
