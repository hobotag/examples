<?php

class Figure {

    public $square;
    public $color;

    const NUMBER_OF_SIDES = 4;

    public function infoAbout() {

        echo '"Это геометричесая фигура!"';
    }

}

class Rectangle extends Figure {

    private $a;
    private $b;

    const SIDES_COUNT = 4;

    final public function __construct($a, $b) {

        $this->a = $a;
        $this->b = $b;
    }

    final public function getArea() {

        return $this->a * $this->b;
    }

    final public function infoAbout() {

        echo '"Это класс прямоугольника. У него' . self::SIDES_COUNT . ' ' . 'стороны!"';
    }

}

class Triangle extends Figure {

    private $a;
    private $b;
    private $c;

    const SIDES_COUNT = 3;

    final public function __construct($a, $b, $c) {

        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    final public function getArea() {
        $p = ($this->a + $this->b + $this->c) / 2;
        $num = $p * ($p - $this->a) * ($p - $this->b) * ($p - $this->c);
        return sqrt($num);
    }

    final public function infoAbout() {

        echo '"Это класс треугольника. У него' . self::SIDES_COUNT . ' ' . 'стороны!"';
    }

}

class Square extends Figure {

    private $a;

    const SIDES_COUNT = 4;

    final public function __construct($a) {

        $this->a = $a;
    }

    final public function getArea() {

        return $this->a * $this->a;
    }

    final public function infoAbout() {

        echo '"Это класс квадрата. У него' . self::SIDES_COUNT . ' ' . 'стороны!"';
    }

}

$rect1 = new Rectangle(4, 5);
echo '<br>';
echo 'Площадь rect1=' . $rect1->getArea();
$rect2 = new Rectangle(7, 10);
echo '<br>';
echo 'Площадь rect2=' . $rect2->getArea();

$tri1 = new Triangle(4, 5, 8);
echo '<br>';
echo 'Площадь $tri1=' . $tri1->getArea();
$tri2 = new Triangle(6, 7, 2);
echo '<br>';
echo 'Площадь $tri2=' . $tri2->getArea();

$square1 = new Square(5);
echo '<br>';
echo 'Площадь square1=' . $square1->getArea();
$square2 = new Square(9);
echo '<br>';
echo 'Площадь square2=' . $square2->getArea();
