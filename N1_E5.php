<?php
declare (strict_types=1);

function clasificarNota(float $notaNumerica): void {
    if ($notaNumerica < 0 || $notaNumerica > 10) {
        echo "Error: Nota numérica fuera de rango";
        return;
    }

    if ($notaNumerica >= 6) {
        echo "Primera División";
    } elseif ($notaNumerica >= 4.5) {
        echo "Segunda División";
    } elseif ($notaNumerica >= 3.3) {
        echo "Tercera División";
    } else {
        echo "El estudiante suspenderá";
    }
}

// prueba de la función
clasificarNota(11);

?>