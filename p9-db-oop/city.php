<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once("./Services/cityService.php");

    use Services\CityService;

    $cityId = isset($_GET["id"]) ? $_GET["id"] : 1;

    $cs = new CityService();
    $city = $cs->getCityById($cityId);


    echo "ID: " . $city->getId() . "<br>";
    echo "Name: " . $city->getName() . "<br>";
    echo "District: " . $city->getDistrict() . "<br>";
    echo "Country: " . $city->getCountryCode() . "<br>";
    echo "Population: " . $city->getPopulation() . "<br>";


    ?>
</body>

</html>