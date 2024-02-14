<?php
$id = $_GET["id"];
$city = $_GET["city"];
$conn = mysqli_connect("localhost", "root", "", "world", 3307);
$query1 = "SELECT * FROM city WHERE id = $id;";
$query2 = "SELECT * FROM city WHERE id = $id;";
// $query2 = "SELECT * FROM city WHERE `name` LIKE '%$city%';";

echo $query2;
$result1 = mysqli_query($conn, $query1);
$result2 = mysqli_query($conn, $query2);
if ($id) {
    while ($row = mysqli_fetch_row($result1)) {
        var_dump($row);
        echo "<br>";
    }
} else if ($city) {
    while ($row = mysqli_fetch_row($result2)) {
        var_dump($row);
        echo "<br>";
    }
} else {
    echo "please specify an id or a city";
}
