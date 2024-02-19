<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once("./Model/Person.php");

    use Model\Person;

    $p1 = new Person("Helder", "Porto");

    echo $p1->getName();
    ?>

</body>

</html>