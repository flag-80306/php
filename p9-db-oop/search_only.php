<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <form action="result_only.php">
            <input name="searchString" placeholder="Search for a city">
            <button type="submit">Search</button>
            <button type="button" id="buttonRandomCity">Get Random City</button>
        </form>
    </div>
    <script>
        const buttonRandomCity = document.querySelector("#buttonRandomCity");
        buttonRandomCity.addEventListener("click", function() {
            window.location.href = "city.php?random=true";
        });
    </script>
</body>

</html>