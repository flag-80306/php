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

    $countryCode = isset($_GET["countryCode"]) ? $_GET["countryCode"] : "";

    require_once("./Services/CityService.php");
    require_once("./Services/CountryService.php");

    use Services\CityService;
    use Services\CountryService;

    $cityService = new CityService();
    $countryService = new CountryService();

    $cities = $cityService->getCitiesByCountryCode($countryCode);
    $country = $countryService->getCountryByCode($countryCode);
    ?>

    <h1>Cities in <?php echo $country->getName() ?></h1>
    <table class="mainTable">
        <thead>
            <tr>
                <th>City</th>
                <th>Country Code</th>
                <th>District</th>
                <th>Population Number</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($cities as $city) {
                echo "<tr>";
                echo "<td>";
                echo $city->getName();
                echo "</td>";
                echo "<td>";
                echo $city->getCountryCode();
                echo "</td>";
                echo "<td>";
                echo $city->getDistrict();
                echo "</td>";
                echo "<td>";
                echo $city->getPopulation();
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>