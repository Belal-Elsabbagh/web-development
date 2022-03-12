<?php
class Calculator
{
    private $x, $y;
    function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    function add()
    {
        return $this->x + $this->y;
    }
    function subtract()
    {
        return $this->x - $this->y;
    }
    function multiply()
    {
        return $this->x * $this->y;
    }
    function divide()
    {
        return $this->x / $this->y;
    }
}

class Product
{
    private $name, $description, $price;

    function __construct($a, $b, $c)
    {
        $this->name = $a;
        $this->description = $b;
        $this->price = $c;
    }

    function getName()
    {
        return $this->name;
    }
    function getDescription()
    {
        return $this->description;
    }
    function getPrice()
    {
        return $this->price;
    }
    function setName($a)
    {
        $this->name = $a;
    }
    function setDescription($a)
    {
        $this->description = $a;
    }
    function setPrice($a)
    {
        $this->price = $a;
    }
}

class Room
{
    private $roomno, $roomtype, $roomarea, $ACmachine;
    function setData($a, $b, $c, $d)
    {
        $this->roomno = $a;
        $this->roomtype = $b;
        $this->roomarea = $c;
        $this->ACmachine = $d;
    }

    function displayData()
    {
        echo "Room number: " . $this->roomno . "<br>";
        echo "Room type: " . $this->roomtype . "<br>";
        echo "Room area: " . $this->roomarea . "<br>";
        echo "Room AC machine: " . $this->ACmachine . "<br>";
    }
}

class Shape
{
    function draw()
    {
        return null;
    }
}
class Circle extends Shape
{
    function draw()
    {
        print "Circle has been drawn.</br>";
    }
}
class Triangle extends Shape
{
    function draw()
    {
        print "Triangle has been drawn.</br>";
    }
}
class Ellipse extends Shape
{
    function draw()
    {
        print "Ellipse has been drawn.";
    }
}

function RUN_calculator()
{
    $mycalc = new Calculator(12, 6);
    echo "The numbers are 12, 6 <br>";
    echo "Addition = " . $mycalc->add() . "<br>";
    echo "Subtraction = " . $mycalc->subtract() . "<br>";
    echo "Multiplication = " . $mycalc->multiply() . "<br>";
    echo "Division = " . $mycalc->divide() . "<br>";
}

function RUN_product()
{
    $product1 = new Product('iPhone 12', 'This is NOT a great iPhone', 2000);
    echo $product1->getName() . "<br>";
    echo $product1->getDescription() . "<br>";
    echo $product1->getPrice() . "<br>";
    echo "<br>";

    $product2 = new Product("", "", "");
    $product2->setName("Samsung S22 Ultra");
    $product2->setDescription("Better than an iPhone");
    $product2->setPrice(1000);

    echo $product2->getName() . "<br>";
    echo $product2->getDescription() . "<br>";
    echo $product2->getPrice() . "<br>";
}

function RUN_room()
{
    $room1 = new Room();
    $room1->setData("RE7", "Computer Lab", "60m^2", true);
    $room1->displayData();
}

function RUN_shape()
{
    $Val = array(2);

    $Val[0] = new Circle();
    $Val[1] = new Triangle();
    $Val[2] = new Ellipse();

    for ($i = 0; $i < 3; $i++) {
        $Val[$i]->draw();
    }
}

function sum3x()
{
    $fd = fopen("sum3x.txt", "a+");
    $a = fread($fd, 8);
    $b = fread($fd, 8);
    if ($a == $b) {
        return fwrite($fd, "\n" . (3 * ($a + $b)));
    }
    fwrite($fd, $a + $b);
}

function RUN_sum3x()
{
    sum3x();
}

function pattern()
{
    $fd = fopen("pattern.txt", "a+");
    $n = fread($fd, 4);
    for ($i = 0; $i <= $n; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            fwrite($fd, "*" . "\t");
        }
        fwrite($fd, "\n");
    }
    fclose($fd);
}

function multTable()
{
    $fd = fopen("multiplication.txt", "a");
    for ($i = 1; $i <= 6; $i++) {
        for ($j = 1; $j <= 6; $j++) {
            fwrite($fd, ($i * $j) . "\t");
        }
        fwrite($fd, "\n");
    }
    fclose($fd);
}
