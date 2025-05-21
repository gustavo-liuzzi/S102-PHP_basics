<?php

$x = 5;
$y = 10;
$n = 15.75;
$m = 20.5;

echo "Variables enteras: <br>";
echo $x."<br>";
echo $y."<br>";
echo "Suma: ".$x + $y."<br>";
echo "Resta: ".$x - $y."<br>";
echo "Producto: ".$x * $y."<br>";
echo "Módulo: ".$x % $y."<br>";
echo "<br>";

echo "Variables decimales: <br>";
echo $n."<br>";
echo $m."<br>";
echo "Suma: ".$n + $m."<br>";
echo "Resta: ".$n - $m."<br>";
echo "Producto: ".$n * $m."<br>";
echo "Módulo: ".fmod($n, $m)."<br>";
echo "<br>";

echo "Operaciones comunes: <br>";
echo "Doble de x: ".($x * 2)."<br>";
echo "Doble de y: ".($y * 2)."<br>";
echo "Doble de n: ".($n * 2)."<br>";
echo "Doble de m: ".($m * 2)."<br>";
echo "Suma de todas las variables: ".($x + $y + $n + $m)."<br>";
echo "Producto de todas las variables: ".($x * $y * $n * $m)."<br>";
echo "<br>";

function calcular($numero1, $numero2, $operacion) {
    switch ($operacion) {
        case '+':
            return "Suma: " . $numero1 + $numero2;
            break;
        case '-':
            return "Resta: " . $numero1 - $numero2;
            break;
        case '*':
            return "Multiplicación: " . $numero1 * $numero2;
            break;
        case '/':
            return "División: " . $numero1 / $numero2;
            break;
        default:
            return "Operación no válida";
    }    

}
echo "Prueba de calculadora: <br>";
echo calcular($x, $n, '/');

?>