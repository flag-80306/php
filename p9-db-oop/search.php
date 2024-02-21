<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // TPC:

    // quando a query city estiver definida no URL
    // mostrar uma lista com as cidades que incluem a string no nome
    // por exemplo o utilizador esreve `isbo` a cidade Lisbon deve aparecer

    $city = isset($_GET["city"]) ? $_GET["city"] : "";
    ?>

    <form method="get" action="">
        <input name="city" placeholder="search city">
        <button type="submit" value="123">GO</button>
    </form>
    <h3>A mostrar resultados para: <?php echo $city ?></h3>

    <?php

    require_once("./Services/CityService.php");

    use Services\CityService;

    $cityService = new CityService();

    $cities = $cityService->getCitiesBySearchString($city);
    if (count($cities) > 0) {
        echo "<ul>";
        foreach ($cities as $city) {
            echo "<li>";
            echo $city->getId();
            echo " - ";
            echo "<a href='city.php?id=" . $city->getId() . "'>";
            echo $city->getName();
            echo "</a>";
            echo "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Nothing to see... Move along.</p>";
    }

    // Trabalho de Grupo
    // 1 - Criar uma pagina inicial apenas com o formulario, (estilo homepage Google)
    // 2 - Criar um botao "Cidade aleatoria" que salta para uma cidade de forma aleatoria
    // 3 - A lista de cidades deve aparecer numa tabela de HTML

    ?>
</body>

</html>