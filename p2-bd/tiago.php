<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <th>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>CountryCode</td>
                <td>District</td>
                <td>Population</td>
            </tr>
        </th>
        <?php

        //database
        $conn = mysqli_connect("localhost", "root", "", "world", 3306);

        $query = "SELECT * FROM city";

        if (isset($_GET["cityId"])) {
            $cityId = $_GET["cityId"];
            $query .= " WHERE id = $cityId";
        } elseif (isset($_GET["cityName"])) {
            $cityName = $_GET["cityName"];
            $query .= " WHERE name LIKE '%$cityName%'";
        }

        echo $query;
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_row($result)) {
            echo "<tr>
                <td>$row[0]</td>
                <td>$row[1]</td>
                <td>$row[2]</td>
                <td>$row[3]</td>
                <td>$row[4]</td>
            </tr>";
        }
        mysqli_free_result($result);
        mysqli_close($conn);


        ?>
    </table>

</body>

</html>