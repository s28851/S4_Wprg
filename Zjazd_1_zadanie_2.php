<?php

echo "Program, który wypisze na ekranie wszystkie liczby pierwsze z zadanego zakresu.\n";

function isPrime($num) {
    if ($num <= 1) {
        echo "podano zły zakres liczb. ";
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

$start = 1; 
$end = 300; 


echo "Sprawdzamy liczby z zakresu od " . $start . " do " . $end . "\n";

for ($num = $start; $num <= $end; $num++) {
    if (isPrime($num)) {
        echo $num . " ";
    }
}