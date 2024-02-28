<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre><?php var_dump($_POST) ?></pre>

    <?php
    require_once("./Services/cityService.php");

    use Services\CityService;

    $name = $_POST["name"];
    $countryCode = $_POST["countryCode"];
    $district = $_POST["district"];
    $population = $_POST["population"];

    $cs = new CityService();
    $newCity = $cs->addCity($name, $countryCode, $district, $population);
    ?>

    <pre><?php var_dump($newCity) ?></pre>

    <br>
    <br>
    <br>
    <a href="countries.php">Lista de paises</a>
    <a href="add_city_form.php">Inserir mais um</a>
</body>

</html>