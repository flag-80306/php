<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "world", 3307);

    $query = "SELECT * FROM city LIMIT 3";

    $result = mysqli_query($conn, $query);

    // while ($row = mysqli_fetch_row($result)) {
    // while ($row = mysqli_fetch_assoc($result)) {
    while ($row = mysqli_fetch_array($result)) {
        var_dump($row);
        echo "<br>";
    }
    mysqli_free_result($result);

    mysqli_close($conn);

    // EX1
    // ?cityId=34

    // EX2
    // ?cityName=lis

    // EX BONUS
    // ?cityId=34&cityName=lis
    ?>
</body>

</html>