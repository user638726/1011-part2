<?php

$inline = [];
$a = 1;
$b = 100;

// Generate a random number between $a and $b
$randomnumber = rand($a, $b);
echo "Generated number: " . $randomnumber . "\n";

// Check if the number is already in the $inline array
if (in_array($randomnumber, $inline)) {
    echo "已有重複的數字\n"; // "Already have a duplicate number"
} else {
    // If not, add it to the $inline array
    $inline[] = $randomnumber; // Use [] to append to the array
}

// Print all numbers in the $inline array
echo "Numbers in array: ";
foreach ($inline as $idx) {
    echo $idx . " ";
}

?>
