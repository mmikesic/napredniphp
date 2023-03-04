//Calculate Tip

<?php
function calculateTip($totalCost, $tipPercent = 20) {
    // Calculate the tip amount based on the total cost and tip percentage
    $tipAmount = $totalCost * ($tipPercent / 100);

    // Add the tip amount to the total cost to get the new total
    $newTotal = $totalCost + $tipAmount;

    // Return the new total
    return $newTotal;
}
    
echo calculateTip(50); 
echo "\n";
echo calculateTip(50, 25);
echo "\n";
