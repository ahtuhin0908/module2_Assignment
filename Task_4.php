<?php
// Function to print the first n Fibonacci numbers
function printFibonacci($count) {
    $fibonacci = [];

    // Handle the first two Fibonacci numbers (0 and 1)
    $fibonacci[] = 0;
    $fibonacci[] = 1;

    // Generate and store the remaining Fibonacci numbers
    for ($i = 2; $i < $count; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    // Print the first n Fibonacci numbers
    for ($i = 0; $i < $count; $i++) {
        echo $fibonacci[$i] . " ";
    }
}

// Call the function to print the first 15 Fibonacci numbers
printFibonacci(15);
?>
