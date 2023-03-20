<?php

class sekil
{
    public $a, $b, $h;

    public function __construct($a, $b = null, $h = null)
    {
        $this->a = $a;
        $this->b = $b;
        $this->h = $h;
    }
}
class Square extends sekil
{
    public function SqArea()
    {
        return $this->a * 2;
    }
    public function SqPerimeter()
    {
        return $this->a * 4;
    }
}

class Rectangle extends sekil
{
    public function RecArea()
    {
        return $this->a * $this->b;;
    }
    public function RecPerimeter()
    {
        return $this->a + $this->b * 2;
    }
}

class Triangle extends sekil
{
    public function TriArea()
    {
        return $this->b * $this->h / 2;
    }
    public function TriPerimeter()
    {
        return $this->a + $this->b + $this->h;
    }
}

$square = new Square(4);
$rectangle = new Rectangle(4, 5);
$triangle = new Triangle(4, 5, 6);

echo "Area of Square = " . $square->SqArea() . "<br/>";
echo "Perimeter of Square = " . $square->SqPerimeter() . "<br/>";

echo "Area of Rectangle = " . $rectangle->RecArea() . "<br/>";
echo "Perimeter of Rectangle = " . $rectangle->RecPerimeter() . "<br/>";

echo "Area of Triangle = " . $triangle->TriArea() . "<br/>";
echo "Perimeter of Triangle = " . $triangle->TriPerimeter() . "<br/>";
