<?php

function contador($contarHasta, $paso = 1) {
        if ($contarHasta === null) {
        $contarHasta = 10;
    }

// asumo que hay que empezar a contar desde 1

    $i = 1;
    while ($i <= $contarHasta) {
        echo $i . "<br>";
        $i += $paso;
    }
}

contador(null, 1);

?>