<?php

// Function that doubles the value (pass by value)
function doubleValue($number) {
    $number = $number * 2;
    return $number;
}

// Function that doubles the value and modifies the original variable (pass by reference)
function doubleReference(&$number) {
    $number = $number * 2;
}

// Example usage

// Pass by value demonstration
$value = 10;
echo "Original value: $value\n";
$doubledValue = doubleValue($value);  // Passing by value
echo "Doubled value (pass by value): $doubledValue\n";
echo "Original value after pass by value: $value\n\n";  // Value remains unchanged

// Pass by reference demonstration
$value2 = 10;
echo "Original value: $value2\n";
doubleReference($value2);  // Passing by reference
echo "Doubled value (pass by reference): $value2\n";  // Original value is modified

?>
