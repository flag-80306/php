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

    $country = isset($_GET["country"]) ? $_GET["country"] : "PRT";



    $cs = new CityService();
    $cities = $cs->getCitiesByCountryCode($country);

    for ($i = 0; $i < count($cities); $i++) {
        $city = $cities[$i];

        echo $city->getId() . " :: " . "<a href='city.php?id=" . $city->getId() . "'>" . $city->getName() . "</a><br>";
    }

    ?>
</body>

</html>