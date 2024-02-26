<?php

namespace Services;

require_once("./Models/Country.php");

use Models\Country;
use mysqli;

class CountryService
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

    function getAllCountries()
    {
        $db_result = $this->connection->query("
        SELECT 
        `Code`,
        `Name`,
        `Continent`,
        `SurfaceArea`,
        `Population`,
        (
            SELECT GROUP_CONCAT(`Language` SEPARATOR ', ')
            FROM `countrylanguage`
            WHERE `CountryCode` = `Code` AND `IsOfficial` = 'T'
            GROUP BY `CountryCode`
        ) AS `OfficialLanguages`,
        (
            SELECT GROUP_CONCAT(`Language` SEPARATOR ', ')
            FROM `countrylanguage`
            WHERE `CountryCode` = `Code` AND `IsOfficial` = 'F'
            GROUP BY `CountryCode`
        ) AS `OtherLanguages`	
        FROM country
        ");
        $results = array();
        while ($row = $db_result->fetch_array()) {
            $country = $this->rowToCountry($row);
            array_push($results, $country);
        }
        $db_result->free_result();
        return $results;
    }

    function getCountryByCode($code)
    {
        $statement = $this->connection->prepare("
        SELECT 
        `Code`,
        `Name`,
        `Continent`,
        `SurfaceArea`,
        `Population`,
        (
            SELECT GROUP_CONCAT(`Language` SEPARATOR ', ')
            FROM `countrylanguage`
            WHERE `CountryCode` = `Code` AND `IsOfficial` = 'T'
            GROUP BY `CountryCode`
        ) AS `OfficialLanguages`,
        (
            SELECT GROUP_CONCAT(`Language` SEPARATOR ', ')
            FROM `countrylanguage`
            WHERE `CountryCode` = `Code` AND `IsOfficial` = 'F'
            GROUP BY `CountryCode`
        ) AS `OtherLanguages`	
        FROM country
        
        WHERE `Code` = ?
        ");
        $statement->bind_param("s", $code);
        $statement->execute();
        $db_result = $statement->get_result();

        $row = $db_result->fetch_array();
        $country = $this->rowToCountry($row);
        $db_result->free_result();
        return $country;
    }

    private function rowToCountry($row)
    {
        $country = new Country(
            $row["Code"],
            $row["Name"],
            $row["Continent"],
            $row["SurfaceArea"],
            $row["Population"],
            $row["OfficialLanguages"],
            $row["OtherLanguages"],
        );
        return $country;
    }
}
