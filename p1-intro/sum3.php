<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        var_dump($_GET);

        $a = $_GET["a"];
        $b = $_GET["b"];
        $c = $_GET["c"];

        if ($a && $b && $c) {
            $result = $a + $b + $c;

            echo "<h1>$result</h1>";
        } else {
            echo "<h1>TA MAL!</h1>";
        }

    ?>
</body>
</html>