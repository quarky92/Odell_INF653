<!DOCTYPE html>
<html>

<head>
    <title>Assignment 1</title>
</head>

<h2>Challenge Set 1</h2>

<?php
echo "<b>Challenge 1:</b><br>";
//challenge 1
$name = "Benjamin Odell";
$age = 22;
$favorite_color = "blue";
echo "My name is $name, I am $age years old and my favorite color is $favorite_color.";
echo "<br><br>";

echo "<b>Challenge 2:</b><br>";
//Challenge 2
echo "<i>He said, \"PHP is fun!\" and left.</i>";
echo "<br>";
echo "First line\nSecond Line";
echo "<br><br>";

echo "<b>Challenge 3:</b><br>";
//Challenge 3
$greeting = 'Hello';
$age = 25;
echo "Welcome to the PHP world!<br>";
echo "Your age is " . $age;
echo "<br><br>";

echo "<b>Challenge 4:</b><br>";
//Challenge 4
echo "Welcome to PHP!<br>";
$name = "John";
echo 'Hello, ' . $name;
echo "<br><br>";


echo "<b>Challenge 5:</b><br>";
//challenge 5
?>

<?php
//the price of an item
$price = 50;
//the discount of an item
$discount = 10;
//finds the final price of an items with its discount
$finalPrice = $price - $discount;
//displays final price
echo "Total price: $" . $finalPrice;
?>

<h2>Challenge Set 2</h2>

<?php
//Challenge 1
echo "<b>Challenge 1:</b><br>";
$num1 = 10;
$num2 = 5;

echo "Number 1: $num1<br>";
echo "Number 2: $num2<br>";
echo "Addition: " . ($num1 + $num2) . "<br>";
echo "Subtraction: " . ($num1 - $num2) . "<br>";
echo "Multiplication: " . ($num1 * $num2) . "<br>";
echo "Division: " . ($num1 / $num2) . "<br>";
echo "Modulus: " . ($num1 % $num2) . "<br>";
echo "<br>";

//Challenge 2
echo "<b>Challenge 2:</b><br>";
$even_odd = 7;
echo "Input: $even_odd<br>";
echo "Output: $even_odd " . (($even_odd % 2) == 0 ? "is an even number" : "is an odd number.");
echo "<br><br>";

//Challenge 3
echo "<b>Challenge 3:</b><br>";
$start_num = 10;
echo "Starting number: $start_num <br> After increment: " . ++$start_num . "<br> After decrement: " . --$start_num;
echo "<br><br>";

//Challenge 4
echo "<b>Challenge 4:</b><br>";
$grade = 85;
echo "Input: $grade<br>";
if ($grade >= 90)
    $grade = 'A';
else if ($grade >= 80)
    $grade = 'B';
else if ($grade >= 70)
    $grade = 'C';
else if ($grade >= 60)
    $grade = 'D';
else
    $grade = 'F';

echo "Output: You Got a $grade!";
echo "<br><br>";

//Challenge 5
echo "<b>Challenge 5:</b><br>";
$year = 2024;
echo "Input: $year<br>";
echo "Output: $year " . ((($year % 4 == 0) && (($year % 100 != 0) || ($year % 400 == 0))) ? "is a leap year." : "is not a leap year.");
;
?>



</html>