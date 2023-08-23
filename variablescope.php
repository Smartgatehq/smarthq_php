<?php

// Variable with local scope:

// $x = 5; // global scope

// function myTest() {
  // using x inside this function will generate an error
//   echo "<p>Variable x inside function is: $x</p>";
// }
// myTest();

// echo "<p>Variable x outside function is: $x</p>";


// Variable with local scope:

// function myTest() {
//   $x = 5; // local scope
//   echo "<p>Variable x inside function is: $x</p>";
// }
// myTest();

// using x outside the function will generate an error
// echo "<p>Variable x outside function is: $x</p>";



// USING THE GLOBAL KEYWORD

$x = 5;
$y = 10;

function myTest() {
global $x, $y;
$y = $x + $y;

}

myTest();
echo $y; //outputs 15

?>


