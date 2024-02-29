<?php
$nome =  "Iza";
echo "Olá $nome";

$num = 4;

if ($num % 2 == 0) {
    echo "<br>par<br>";
} else {
    echo "<br>impar<br>";
}

for ($i=0; $i < 10; $i++) { 
    echo $num = $i == 9 ? $i+1 : $i+1 . ", ";
}

function sum($num1, $num2) {
    return $num1 + $num2;
}

echo "<br>5 + 4 = " . sum(5, 4);


$numberArray = [4, 6, 3, 7, 8];

echo "<br> Array: ";
for ($i=0; $i < sizeof($numberArray); $i++) { 
    echo $numberArray[$i] . " ";
}

echo ", A média é: " . array_sum($numberArray) / sizeof($numberArray);

function transpose($matrix) {
    $rows = count($matrix);
    $cols = count($matrix[0]);

    $result = array();

    for ($i=0; $i < $cols; $i++) { 
        for ($j=0; $j < $rows; $j++) { 
            $result[$i][$j] = $matrix[$j][$i];
        }
    }

    return $result;
}

$matrix = [
    [1, 2, 3, 9],
    [4, 5, 6, 8],
    [7, 8, 9, 7]
];

$transpose = transpose($matrix);

echo "<br>Matrix Original:<br>";

foreach ($matrix as $row) {
    echo implode(" ", $row) . "<br>";
}

echo "<br>Matrix Transposta:<br>";

foreach ($transpose as $row) {
    echo implode(" ", $row) . "<br>";
}

class Circle {
    //Properties
    public $radius;
    public $color;
    public $is_filled;

    //Constructor
    public function __construct($radius, $color, $is_filled) {
        $this->radius = $radius;
        $this->color = $color;
        $this->is_filled = $is_filled;
    }

    //Methods
    public function areaCalc() {
        $area = M_PI * $this->radius**2;
        return $area;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function getColor() {
        return $this->color;
    }
    public function getFilled() {
        return $this->is_filled;
    }
}

$circle = new Circle(4,"vermelho",true);

echo "<br> O circulo é " . $circle->getColor() . $circleFilling = $circle->getFilled() ?  ', preenchido' : ', vazio' , ', com o raio de ' . $circle->getRadius();  

echo "<br> A área do circulo é: " . $circle->areaCalc();

$num = 0;

echo "<br>O numero $num é: ";
if ($num > 0) {
    echo "positivo<br>";
} else if ($num < 0) {
    echo "negativo<br>";
} else {
    echo "zero<br>";
}

$num = array();
for ($i = 0; $i < 10; $i++) {
    if ($i == 0) {
        $num[$i] = 0;
        $num[$i + 1] = 1;
    } else if ($i == 1) {
        $num[$i] = 1;
    } else {
        $num[$i] = $num[$i-1] + $num[$i-2];
    }
}

foreach ($num as $n) {
    echo "$n ";
}

function palindrome($word) {
    $wordReversed = strrev($word);
    if ($wordReversed === $word) { 
        return true;
    } else {
        return false;
    }
}
$word = "ovo";
echo "<br>Palavra: $word<br>";
echo $isPalindrome = palindrome($word) ? "A palavra é um palindromo" : "A palavra não é um palindromo";

$array = [3, 6, 9, 2, 20, 1, 1.5, -4];

$largest = PHP_INT_MIN;
$secondLargest = PHP_INT_MIN;

foreach ($array as $num) {
    if ($num > $largest) {
        $secondLargest = $largest;
        $largest = $num;
    } elseif ($num > $secondLargest && $num != $largest) {
        $secondLargest = $num;
    }
}

echo "<br>$largest, $secondLargest<br>"; 

$matrix = [
    [1, 7, 3],
    [7, 4, 5],
    [3, 5, 2]
];

echo "<br>Matrix:<br>";
foreach ($matrix as $row) {
    echo implode(" ", $row) . "<br>";
}

$transposed = transpose($matrix);
echo "<br>Matrix transposta:<br>";
foreach ($transposed as $row) {
    echo implode(" ", $row) . "<br>";
}

if ($matrix === $transposed) {
    echo "Matrix é simétrica<br>";
}

class Calculator {

    public function sum($a, $b) {
        return $a + $b;
    }
    public function subtract($a, $b) {
        return $a - $b;
    }
    public function multiply($a, $b) {
        return $a * $b;
    }
    public function divide($a, $b) {
        return $a / $b;
    }
}

$calc = new Calculator();

echo "<br>Calculadora<br>";
echo "Adição: 2 + 2 = " . $calc->sum(2, 2) ."<br>";
echo "Subtração: 2 - 2 = " . $calc->subtract(2, 2) ."<br>";
echo "Multiplicação: 4 * 2 = " . $calc->multiply(4, 2) ."<br>";
echo "Divisão: 8 / 2 = " . $calc->divide(8, 2) ."<br>";
