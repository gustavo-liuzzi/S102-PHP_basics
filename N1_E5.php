<?php

// asumo que la nota del estudiante entra por parámetro y es un número de 1 a 10

function calificacionAmostrar($notaNumerica){
    if (($notaNumerica > 0) && ($notaNumerica <= 10)) {
        if ($notaNumerica > 5.99) {
            echo "Primera División";
        }
        else if (($notaNumerica > 4.49) && ($notaNumerica < 6)) {
            echo "Segunda División";
        }
        else if (($notaNumerica > 3.29) && ($notaNumerica < 4.5)) {
            echo "Tercera División";
        }
        else {echo "El estudiante suspenderá";}

    }
    else {echo "Error: Nota numérica fuera de rango";}
}

// prueba de la función
calificacionAmostrar(5.48);

?>