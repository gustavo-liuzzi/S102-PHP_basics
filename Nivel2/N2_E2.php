<?php
declare(strict_types=1);

function addToSubtotal (float $currentSubtotal, float $price, int $quantity) : float {
    return $currentSubtotal + ($price * $quantity);
}

$chocolate = 1.0;
$chicles = 0.5;
$candy = 1.5;
$subTotal = 0;

$subTotal = addToSubtotal($subTotal, $chocolate, 2);
$subTotal = addToSubtotal($subTotal, $chicles, 1);
$subTotal = addToSubtotal($subTotal, $candy, 1);

$total = $subTotal;

echo $total;