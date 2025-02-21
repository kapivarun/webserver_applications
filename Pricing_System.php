<?php

function calculateTicketPrice($age, $isStudent) {
    $basePrice = 10;
    $discount = 0;

    // Apply discount based on age and student status
    if ($age < 12) {
        $discount = 0.50; // 50% discount for children
    } elseif ($age >= 60) {
        $discount = 0.30; // 30% discount for seniors
    } elseif ($isStudent === "Yes") {
        $discount = 0.20; // 20% discount for students with valid ID
    }

    // Calculate the final price
    $finalPrice = $basePrice - ($basePrice * $discount);
    return $finalPrice;
}

$age = 65; 
$isStudent = "No";  

// Calculate the ticket price
$ticketPrice = calculateTicketPrice($age, $isStudent);

// Output the ticket price
echo "Ticket Price: $" . $ticketPrice . "\n";

?>
