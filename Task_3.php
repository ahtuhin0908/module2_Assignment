<?php
// Function to calculate Fibonacci numbers
function fibonacci($n) {
    if ($n <= 1) {
        return $n;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

$count = 0; // Counter for the number of Fibonacci numbers found

for ($i = 0; $count < 10; $i++) {
    $fib = fibonacci($i);

    // Check if the Fibonacci number is greater than 100
    if ($fib > 100) {
        break; // Break out of the loop if greater than 100
    }

    echo $fib . " ";
    $count++;
}

?>
