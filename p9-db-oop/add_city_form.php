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

    use Services\CountryService;

    $cs = new CountryService();
    $countries = $cs->getAllCountries();

    ?>
    <fieldset>
        <legend>Add new City:</legend>
        <form action="add_city_result.php" method="post">
            <label for="">
                Name:
                <input type="text" placeholder="City Name" name="name">
            </label>
            <br>
            <br>
            <label for="">
                Country Code:
                <select name="countryCode">
                    <?php
                    foreach ($countries as $country) {
                        echo "<option value='" . $country->getCode() . "'>" . $country->getName() . "</option>";
                    }
                    ?>
                    <!-- <option value="PRT">Portugal</option>
                    <option value="GBR">UK</option>
                    <option value="USA">USA</option>
                    <option value="FRA">France</option> -->
                </select>
            </label>
            <br>
            <br>
            <label for="">
                District:
                <input type="text" placeholder="District" name="district">
            </label>
            <br>
            <br>
            <label for="">
                Population:
                <input type="text" placeholder="Population" name="population">
            </label>
            <br>
            <br>
            <button type="submit">Submit</button>
        </form>
    </fieldset>
</body>

</html>