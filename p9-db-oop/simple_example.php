<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $country = isset($_GET["country"]) ? $_GET["country"] : "PRT";
    $input_population = 0;

    $connection = new mysqli("localhost", "root", "", "world", 3307);
    $statement = $connection->prepare("SELECT * FROM `city` WHERE `countryCode` = ? AND `Population` > ?");
    $statement->bind_param("si", $country, $input_population);

    $statement->execute();

    // 1 - vamos ler os dados do SELECT com get_result
    $result = $statement->get_result();

    while ($row = $result->fetch_array()) {
        echo $row["ID"] . "::::" . $row["Name"] . "<br>";
    }


    // 2 - vamos ler os dados do SELECT com bind_result e uma variavel para cada coluna

    // $statement->bind_result($id, $name, $countryCode, $district, $pop);
    // while ($statement->fetch()) {
    //     echo $name . "::::" . $pop . "<br>";
    // }
    ?>

</body>

</html>