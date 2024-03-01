<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once("./Services/countryService.php");
    require_once("./Services/cityService.php");

    use Services\CountryService;
    use Services\CityService;

    $countryService = new CountryService();
    $cityService = new CityService();

    $cityId = isset($_GET["cityId"]) ? $_GET["cityId"] : -1;
    $city = $cityService->getCityById($cityId);

    $countries = $countryService->getAllCountries();
    ?>
    <fieldset>
        <legend>Edit City:</legend>
        <!-- <form action="edit_city_result.php?cityId=<?php echo $cityId ?>" method="post"> -->
        <form action="edit_city_result.php" method="post">
            <input type="hidden" name="id" value="<?php echo $city->getId() ?>">
            <label for="">
                Name:
                <input required type="text" placeholder="City Name" name="name" value="<?php echo $city->getName() ?>">
            </label>
            <br>
            <br>
            <label for="">
                Country Code:
                <select name="countryCode">
                    <?php
                    foreach ($countries as $country) {
                        if ($city->getCountryCode() == $country->getCode()) {
                            echo "<option selected value='" . $country->getCode() . "'>" . $country->getName() . "</option>";
                        } else {
                            echo "<option value='" . $country->getCode() . "'>" . $country->getName() . "</option>";
                        }
                    }
                    ?>
                </select>
            </label>
            <br>
            <br>
            <label for="">
                District:
                <input type="text" placeholder="District" name="district" value="<?php echo $city->getDistrict() ?>">
            </label>
            <br>
            <br>
            <label for="">
                Population:
                <input type="text" placeholder="Population" name="population" value="<?php echo $city->getPopulation() ?>">
            </label>
            <br>
            <br>
            <button type="submit">Submit</button>
        </form>
    </fieldset>
</body>

</html>