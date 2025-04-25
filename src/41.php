<?php
// Example PHP code for generating random data

// Generate a random integer between 1 and 50
echo "Random Integer: " . rand(1, 50) . "\n";

// Generate a random floating-point number between 0.0 and 10.0
echo "Random Floating-Point Number: " . rand(0.0, 10.0) . "\n";

// Generate a random string of lowercase letters (a-z)
$randomString = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, 8);
echo "Random String: " . $randomString . "\n";
?>
