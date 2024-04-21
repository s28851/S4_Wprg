<?php
echo "Program wyliczający ciąg liczb Fibonacciego do N-tego elementu.\n";
function fibonacci($n) {
    $fib = [0, 1]; 
    for ($i = 2; $i <= $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2]; 
    }
    return $fib;
}
$N = 10; 
$fibonacciSequence = fibonacci($N);
echo "Ciąg zapisano w tablicy.\n\n";
echo $N . ". element ciągu Fibonaciego wynosi " . $fibonacciSequence[$N] . "\n\n";
echo "Kolejne nieparzyste emementy ciągu w ponumerowanych wierszach:\n";
$element = 1;
foreach ($fibonacciSequence as $number) {
    if ($number % 2 !== 0) { 
        echo "Nr " . $element . ": " . $number . PHP_EOL;
        $element++;
    }
}