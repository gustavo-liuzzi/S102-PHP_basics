<?php

function isBitten() {
    $chance = rand(0, 1);
    if ($chance === 0) {
        return false;
    } else {
        return true;
    }
}

// prueba de función
echo isBitten();

?>