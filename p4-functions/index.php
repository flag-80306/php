<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function sumTest($a, $b)
    {
        $c = 5;
        echo $c;
        echo "<hr>";
        return $a + $b;
    }

    $c = 40;
    echo "<hr>";
    echo sumTest(12, 4);
    echo "<hr>";
    echo $c;

    ?>
</body>

</html>