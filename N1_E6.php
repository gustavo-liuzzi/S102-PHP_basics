<?php

function isBitten() {
    $chance = rand(0, 1);
    if ($chance === 0) {
        echo "Escapaste de Charlie y no te mordió!";
    } else {
        echo "Charlie te mordió!";
    }
}

// prueba de función
echo isBitten();

?>