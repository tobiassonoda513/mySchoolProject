<?php
// Define variables and initialize array
$var1 = "value1";
$array = array("value2", "value3");

// Print variable
echo $var1;

// Initialize array as null
unset($array[0]);

// Remove element by key from array
$rval = $array["value2"];

// Output the array
print_r($array);

// Loop through array and print values
for ($i = 0; $i < count($array); $i++) {
    echo $array[$i] . "<br>";
}
?>
