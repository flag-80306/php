<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $numbers = array(4, 2, "coisas", 12, 3, 4, 45, 12, 2, 4, 1);
        var_dump($numbers);
        
        echo "<ul>";
        for ($i = 0; $i < count($numbers); $i++) {
            echo "<li>$i : $numbers[$i]</li>";
        }
        echo "</ul>";

        $matrix = array(
            array(1, 2, 3),
            array(4, 5, 6),
            array(7, 8, 9)
        );
        var_dump($matrix);
        echo $matrix[0][2];

    ?>
</body>
</html>