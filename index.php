<?php

// 1. Introduce Yourself
$name = "John Doe";
$age = 25;
$favorite_color = "blue";
echo "1. Hi, I'm $name, I am $age years old, and my favorite color is $favorite_color.\n\n";

// 2. Simple Math
$a = 10;
$b = 5;
echo "2. Sum: " . ($a + $b) . "\n";
echo "   Difference: " . ($a - $b) . "\n";
echo "   Product: " . ($a * $b) . "\n";
echo "   Quotient: " . ($a / $b) . "\n\n";

// 3. Area and Perimeter of a Rectangle
$length = 7;
$width = 4;
$area = $length * $width;
$perimeter = 2 * ($length + $width);
echo "3. Area: $area\n";
echo "   Perimeter: $perimeter\n\n";

// 4. Temperature Converter
$celsius = 30;
$fahrenheit = ($celsius * 9/5) + 32;
echo "4. $celsius°C is equal to $fahrenheit°F\n\n";

// 5. Swapping Variables
$x = 5;
$y = 10;
$temp = $x;
$x = $y;
$y = $temp;
echo "5. After swapping: x = $x, y = $y\n\n";

// 6. Salary Calculator
$basic_salary = 20000;
$allowance = 5000;
$deduction = 3000;
$net_salary = $basic_salary + $allowance - $deduction;
echo "6. Net Salary: $net_salary\n\n";

// 7. BMI Calculator
$weight = 70; // kg
$height = 1.75; // meters
$bmi = $weight / ($height * $height);
echo "7. BMI: " . round($bmi, 2) . "\n\n";

// 8. String Manipulation
$sentence = "He who is prudent and lies in wait for an enemy who is not, will be victorious -Sun Tzu";
echo "8. Sentence: $sentence\n";
echo "   Number of characters: " . strlen($sentence) . "\n";
echo "   Number of words: " . str_word_count($sentence) . "\n";
echo "   Uppercase: " . strtoupper($sentence) . "\n";
echo "   Lowercase: " . strtolower($sentence) . "\n\n";

// 9. Bank Account Simulation
$balance = 10000;
$deposit = 2000;
$withdraw = 1500;
$balance = $balance + $deposit - $withdraw;
echo "9. Updated Balance: $balance\n\n";

// 10. Simple Grading System
$math = 85;
$english = 90;
$science = 80;
$average = ($math + $english + $science) / 3;

if ($average >= 90) {
    $grade = "A";
} elseif ($average >= 80) {
    $grade = "B";
} elseif ($average >= 70) {
    $grade = "C";
} elseif ($average >= 60) {
    $grade = "D";
} else {
    $grade = "F";
}
echo "10. Average Score: " . round($average, 2) . "\n";
echo "    Grade: $grade\n\n";

// 11. Currency Converter
$php_amount = 1000;
$usd_rate = 0.018; // Example rate
$eur_rate = 0.017;
$jpy_rate = 2.65;

$usd = $php_amount * $usd_rate;
$eur = $php_amount * $eur_rate;
$jpy = $php_amount * $jpy_rate;

echo "11. PHP $php_amount is:\n";
echo "    USD: $" . round($usd, 2) . "\n";
echo "    EUR: €" . round($eur, 2) . "\n";
echo "    JPY: ¥" . round($jpy, 2) . "\n\n";

// 12. Travel Cost Estimator
$distance = 150; // km
$fuel_consumption = 15; // km per liter
$fuel_price = 70; // per liter

$fuel_needed = $distance / $fuel_consumption;
$travel_cost = $fuel_needed * $fuel_price;

echo "12. Estimated Travel Cost: PHP " . round($travel_cost, 2) . "\n";

?>
