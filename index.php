<?php
// Nested if-else statement

$condition1 = true;
$condition2 = true;
$condition3 = false;

if($condition1){
      if ($condition2) {
            if ($condition3) {
                  echo "Hello! <br>";
            } else {
                  echo "Number 1 <br>";
            }
      } else {
            echo "Number 2";
      }
} else {
      echo "Number 3 <br>";
}

echo "<br>";
// elseif statement

if ($condition1 && $condition2 && $condition3) {
      echo "hello!";
} elseif(" $condition1 && $condition2 "){
      echo "Number 1";
}elseif(" $condition1 "){
      echo "Number 2";
} else {
      echo "Number 3 <br>";
}

echo "<br>";

// condition ternary operator

$condition = ($condition1 && $condition2 && $condition3) ? "hello" : (($condition1 && $condition2) ? "number 1" : (($condition1) ? "number 2" : "number 3"));
echo "$condition <br>";

// odd even number if else statement

$num = 16;
if ($num % 2 == 0) {
      echo "{$num} is an even number <br>";
} elseif($num % 2 == 1) {
      echo "{$num} is a odd number <br>";
}

// odd even ternary operator

$num = ($num % 2 == 0) ? "{$num} is an even number" : (($num % 2 == 1) ? "{$num} is a odd number" : "");
echo "$num <br>";

