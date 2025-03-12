<?php
// Function to generate a random number between 1 and 10
function getRandomNumber() {
  return rand(1, 10);
}

// Function to calculate the sum of two numbers
function calculateSum($num1, $num2) {
  return $num1 + $num2;
}

// Function to check if a number is even or odd
function isEven($number) {
  return $number % 2 === 0;
}

// Function to get the largest number from an array of numbers
function getLargestNumber($numbers) {
  return max($numbers);
}

// Function to get the smallest number from an array of numbers
function getSmallestNumber($numbers) {
  return min($numbers);
}

// Function to check if a string is palindrome or not
function isPalindrome($string) {
  return $string === strrev($string);
}

// Function to convert a number to its ordinal representation
function getOrdinal($number) {
  switch ($number % 100) {
    case 11:
    case 12:
    case 13:
      return $number . 'th';
  }

  switch ($number % 10) {
    case 1:
      return $number . 'st';
    case 2:
      return $number . 'nd';
    case 3:
      return $number . 'rd';
    default:
      return $number . 'th';
  }
}
?>