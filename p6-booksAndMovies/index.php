<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once("./Book.php");
    require_once("./Movie.php");

    $lotr = new Book("Lord of the Rings: The fellowship of the Ring", "J. R. R. Tolkien", 10.5);
    $hgttg = new Book("Hitchiker's Guide to the Galaxy", "Douglas Adams", 15);

    $books = array($lotr, $hgttg);

    for ($i = 0; $i < count($books); $i++) {
        $book = $books[$i];

        echo $book->details() . "<br>";
    }


    $titanic = new Movie("Titanic", "Drama", 5);



    $lotr->setTitle("L O T R!!!!!");

    ?>
</body>

</html>