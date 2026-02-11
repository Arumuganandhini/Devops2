<?php
echo "=== Jenkins PHP Test Started ===\n";

// Simple test case
$a = 10;
$b = 20;
$sum = $a + $b;

if ($sum === 30) {
    echo "Test Passed: Sum is correct\n";
    exit(0);   // SUCCESS → Jenkins build PASS
} else {
    echo "Test Failed: Sum is incorrect\n";
    exit(1);   // FAILURE → Jenkins build FAIL
}
?>
