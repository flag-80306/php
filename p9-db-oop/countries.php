<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/main.css">
</head>

<body>

    <?php

    require_once("./Services/CountryService.php");

    use Services\CountryService;

    $countryService = new CountryService();
    $countries = $countryService->getAllCountries();
    ?>

    <h1>All Countries</h1>
    <table class="mainTable">
        <thead>
            <tr>
                <th>Country</th>
                <th>Continent</th>
                <th>Surface Area</th>
                <th>Population Number</th>
                <th>Official Languages</th>
                <th>Other Languages</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($countries as $country) {
                echo "<tr>";
                echo "<td>";
                echo "<a href=\"cities.php?countryCode=" . $country->getCode() . "\">";
                echo $country->getName();
                echo "</a>";
                echo "</td>";
                echo "<td>";
                echo $country->getContinent();
                echo "</td>";
                echo "<td>";
                echo $country->getSurfaceArea();
                echo "</td>";
                echo "<td>";
                echo $country->getPopulation();
                echo "</td>";
                echo "<td>";
                echo $country->getOfficialLanguages();
                echo "</td>";
                echo "<td>";
                echo $country->getOtherLanguages();
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>