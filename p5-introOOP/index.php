<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    use PgSql\Result;

    require_once("./Person.php");
    require_once("./Rectangle.php");
    require_once("./Circle.php");

    $p1 = new Person("Joe", 20, "Paris");
    $p2 = new Person("Bob", 22, "London");

    var_dump($p1);

    // Exercicio criar 2 pessoas no PHP
    // com atributos: name, age, city
    // imprimir apenas o nome e a cidade do mais velho...

    if ($p1->age > $p2->age) {
        $p1->printGreeting();
    } else {
        echo $p2->greeting();
    }


    // Exercicio 2:
    // Criar uma classe Rectangle
    // contem 2 propriedades: width, height
    // contem 2 metodos: area, perimeter que retornam a respectiva area e perimetro
    // a altura e largura devem ser dadas no construtor


    $r1 = new Rectangle(2, 5);
    $r2 = new Rectangle(4, 4);
    $c1 = new Circle(4);

    echo "<hr>";
    echo "<hr>";
    echo "<hr>";
    echo "R1 Area: " . $r1->area();
    echo "<hr>";
    echo "R2 PERIMENTER: " . $r2->perimeter();
    echo "<hr>";
    echo "circle area: " . $c1->area();
    echo "<hr>";
    echo "circumeference: " . $c1->circumference();

    Rectangle::printRectangle($r1);


    // TPC
    // Criar 2 classes, 1 para livros outra para filmes
    // as propriedades que voces quiserem
    // construtor
    // um metodo para imprimir os detalhes do objecto

    ?>



</body>

</html>