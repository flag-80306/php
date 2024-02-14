<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            var_dump($_GET);
            echo $_GET["number"];
        ?>
    </div>
    <?php
    
        if ($_GET["number"]) {
            $number = $_GET["number"];

            for ($i = 1; $i <= 10; $i++) {
                $res = $number * $i;
                echo "$number x $i = $res<br>";
            }

        } else {
            echo "URL query param `number` nao definido";
        }
    ?>
</body>
</html>
