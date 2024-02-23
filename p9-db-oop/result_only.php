<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .cityTable {
            background-color: pink;
            border-spacing: 0;
        }

        .cityTable th {
            text-align: left;
            background-color: yellow;
        }

        .cityTable td,
        .cityTable th {
            padding: 10px;
            border-bottom: solid 2px white;
        }
    </style>
</head>

<body>
    <?php
    require_once("./Services/cityService.php");

    use Services\CityService;

    $searchString = isset($_GET["searchString"]) ? $_GET["searchString"] : "";

    $cs = new CityService();

    if ($searchString) {
        $cities = $cs->getCitiesBySearchString($searchString);

        echo "<h1>Results for: `$searchString`</h1>";
        echo "<table class=\"cityTable\">";
        echo "<tr><th>Id</th><th>City Name</th><th>District</th></tr>";
        foreach ($cities as $city) {
            echo "<tr>";
            echo "<td>";
            echo "<a href=\"city.php?id=" . $city->getId() . "\">" . $city->getId() . "</a>";
            echo "</td>";
            echo "<td>";
            echo $city->getName();
            echo "</td>";
            echo "<td>";
            echo $city->getDistrict();
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>

</html>