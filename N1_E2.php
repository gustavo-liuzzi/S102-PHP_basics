<?php

// imprimir en pantalla un string guardado en una variable
$campoDeTexto = "Hello, world";
echo $campoDeTexto;
echo "<br>";

// transformar a mayúsculas y mostrar en pantalla
echo strtoupper($campoDeTexto);
echo "<br>";

// imprimir en pantalla la longitud de la cadena
echo strlen($campoDeTexto);
echo "<br>";

// imprimir en pantalla la cadena en orden inverso
echo strrev($campoDeTexto);
echo "<br>";

// añadir otra variable tipo String, concatenar con la anterior e imprimir en pantalla
$campoDeTexto2 = "Este es el curso de PHP";
echo $campoDeTexto . " " . $campoDeTexto2;
echo "<br>";

?>
