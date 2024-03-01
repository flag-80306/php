<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre><?php var_dump($_POST) ?></pre>
    <pre><?php var_dump($_GET) ?></pre>

    <?php
    require_once("./Services/cityService.php");

    use Services\CityService;
    use Models\City;

    $city = new City(
        $_POST["id"],
        $_POST["name"],
        $_POST["countryCode"],
        $_POST["district"],
        $_POST["population"]
    );

    $cs = new CityService();
    $cs->updateCity($city);
    ?>

    <br>
    <br>
    <br>
    <a href="countries.php">Lista de paises</a>

</body>

</html>