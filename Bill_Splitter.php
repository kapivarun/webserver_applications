<?php
function splitBill($totalBill, $numPeople, $tipPercentage = 10) {
    
    $tipAmount = ($totalBill * $tipPercentage) / 100;
    
    $totalAmount = $totalBill + $tipAmount;
    
    $amountPerPerson = $totalAmount / $numPeople;
    
    return $amountPerPerson;
}

// Example usage
$totalBill = 120;
$numPeople = 4;
$tipPercentage = 15;  

// Call the function and display the result
$amountPerPerson = splitBill($totalBill, $numPeople, $tipPercentage);

echo "Each person pays: $" . number_format($amountPerPerson, 2) . "\n";

?>
