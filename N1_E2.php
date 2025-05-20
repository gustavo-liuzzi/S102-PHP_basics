<?php

$campoDeTexto = "Hello, world .";
$campoDeTexto2 = "Este es el curso de PHP";

// imprimir en pantalla un string guardado en una variable
echo $campoDeTexto."<br>";

// transformar a mayúsculas y mostrar en pantalla
echo strtoupper($campoDeTexto)."<br>";

// imprimir en pantalla la longitud de la cadena
echo strlen($campoDeTexto)."<br>";

// imprimir en pantalla la cadena en orden inverso
echo strrev($campoDeTexto)."<br>";

// añadir otra variable tipo String, concatenar con la anterior e imprimir en pantalla
echo $campoDeTexto . " " . $campoDeTexto2;

?>
