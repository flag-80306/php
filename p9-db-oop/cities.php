<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/main.css">
</head>

<body>
    <!-- http://localhost/flag/p9-db-oop/cities.php?countryCode=PRT&deleteCityId=2916 -->
    <?php

    $countryCode = isset($_GET["countryCode"]) ? $_GET["countryCode"] : "";
    $deleteCityId = isset($_GET["deleteCityId"]) ? $_GET["deleteCityId"] : false;

    require_once("./Services/CityService.php");
    require_once("./Services/CountryService.php");

    use Services\CityService;
    use Services\CountryService;

    $cityService = new CityService();
    $countryService = new CountryService();


    if ($deleteCityId) {
        $cityService->deleteCity($deleteCityId);
    }

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
                <th>...</th>
            </tr>
        </thead>
        <tbody id="mainTableBody">
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
                echo "<td>";
                // echo "<a href='?countryCode=" . $city->getCountryCode() . "&deleteCityId=" . $city->getId() . "'>Apagar</a>";
                echo "<button>✏️</button>";
                echo "<button
                        class='deleteButton'
                        data-country-code=" . $city->getCountryCode() . "
                        data-city-id=" . $city->getId() . "
                    >❌</button>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <script>
        const mainTableBody = document.querySelector("#mainTableBody");
        mainTableBody.addEventListener("click", function(event) {
            // console.log(event.target.className);

            if (event.target.className === "deleteButton") {
                deleteCity(event.target);
            }
        });

        function deleteCity(button) {
            const cityId = button.dataset.cityId;
            const countryCode = button.dataset.countryCode;
            const answer = window.confirm("Tem a certeza que quer apagar a cidade?");
            if (answer === true) {
                window.location.href = `?countryCode=${countryCode}&deleteCityId=${cityId}`;
            }
        }
    </script>
</body>

</html>