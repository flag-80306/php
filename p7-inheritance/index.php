<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    require_once("./Dog.php");
    require_once("./Cat.php");

    $d1 = new Dog("Spot", 20);
    echo $d1->bark();

    $c1 = new Cat("Garfield", 25, "Lasagna");

    echo $c1->getName() . " loves " . $c1->getFavoriteFood();

    // TPC
    // Criar uma classe Product
    // Fazer com que a class Movie e a classe Book extendam a class Product
    ?>
</body>

</html>