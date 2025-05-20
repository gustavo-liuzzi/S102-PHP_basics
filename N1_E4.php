<?php
declare(strict_types=1);

function contarHasta(int $contarHasta = 10, int $paso = 1):void {
    $i = 0;
    while ($i <= $contarHasta) {
        echo $i . "<br>";
        $i += $paso;
    }
}

contarHasta(10, 5);

?>