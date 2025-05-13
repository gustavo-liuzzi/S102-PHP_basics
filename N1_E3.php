<?php

// declaración de variables
$x = 5;
$y = 10;
$n = 15.75;
$m = 20.5;

// mostrar en pantalla el valor de las variables que almacenan números enteros y realizar suma, resta, producto y módulo entre ellas
echo "Variables enteras: <br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";
echo $x + $y;
echo "<br>";
echo $x - $y;
echo "<br>";
echo $x * $y;
echo "<br>";
echo $x % $y;
echo "<br>";
echo "<br>";

// mostrar en pantalla el valor de las variables que almacenan números decimales y realizar suma, resta, producto y módulo entre ellas
echo "Variables decimales: <br>";
echo $n;
echo "<br>";
echo $m;
echo "<br>";
echo $n + $m;
echo "<br>";
echo $n - $m;
echo "<br>";
echo $n * $m;
echo "<br>";
echo fmod($n, $m);
echo "<br>";
echo "<br>";

// operaciones comunes para todas las variables
echo "Operaciones comunes: <br>";
echo $x * 2;
echo "<br>";
echo $y * 2;
echo "<br>";
echo $n * 2;
echo "<br>";
echo $m * 2;
echo "<br>";
echo $x + $y + $n + $m;
echo "<br>";
echo $x * $y * $n * $m;
echo "<br>";
echo "<br>";

// calculadora
function calculadora($numero1, $numero2, $operacion) {
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
echo calculadora($x, $n, '/');

?>