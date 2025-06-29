<?php
declare(strict_types=1);

function calculateCallCost (int $minutes, float $pricePerMinute): float {
    if ($minutes > 3) {
        return 0.1 + (($minutes - 3) * $pricePerMinute);
    } else {
        return 0.1;
    }
}

$durationInMinutes = 15;
$q2Rate = 0.05;

echo calculateCallCost($durationInMinutes, $q2Rate);