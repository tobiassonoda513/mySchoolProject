<?php
// Function to check if a number is even or odd
function isEven($number) {
    return $number % 2 == 0;
}

// Function to check if a number is positive or negative
function isPositive($number) {
    return $number > 0;
}

// Function to check if a number is prime or not
function isPrime($number) {
    // Corner case: 1 is neither prime nor composite
    if ($number <= 1) {
        return false;
    }

    // Check if number is divisible by any number between 2 and square root of the number
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    // If no divisor is found, then number is prime
    return true;
}

// Function to calculate the sum of two numbers
function add($num1, $num2) {
    return $num1 + $num2;
}

// Function to calculate the product of two numbers
function multiply($num1, $num2) {
    return $num1 * $num2;
}

// Function to calculate the average of a list of numbers
function average($numbers) {
    return array_sum($numbers) / count($numbers);
}

// Function to check if a string is palindrome or not
function isPalindrome($string) {
    $string = strtolower($string);
    $length = strlen($string);
    for ($i = 0; $i < $length / 2; $i++) {
        if ($string[$i] != $string[$length - $i - 1]) {
            return false;
        }
    }
    return true;
}
?>