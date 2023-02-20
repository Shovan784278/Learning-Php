<?php

    // ---------------Module 4 Assignment--------------

//Question 1: Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)

function sortByLength($arr)
{
    usort($arr, function ($a, $b) {
        return strlen($a) - strlen($b);
    });
    return $arr;
}

//use of this function for output

$fruits = array("banana", "apple", "cherry", "date");

$sorted_fruits = sortByLength($fruits);

print_r($sorted_fruits); // Output: Array ( [0] => date [1] => apple [2] => banana [3] => cherry )


//Question 2: Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.

function concatBackward($str1, $str2)
{
    $len1 = strlen($str1);
    $len2 = strlen($str2);
    $new_str = $str1;

    if ($len2 > $len1) {
        $new_str .= strrev(substr($str2, 0, $len2 - $len1));
    }
    $new_str .= strrev(substr($str2, $len2 - $len1));

    return $new_str;
}

//use of this function for output

$str1 = "Hello";
$str2 = "World!";

$new_str = concatBackward($str1, $str2);

echo $new_str; // Output: "Hello!dlroW"



//Question 3: Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.

function removeFirstAndLast($arr) {
    array_shift($arr);
    array_pop($arr);
    return $arr;
}

//Use of this Function

$fruits = array("apple", "banana", "cherry", "date");
$new_fruits = removeFirstAndLast($fruits);
print_r($new_fruits); // Output: Array ( [0] => banana [1] => cherry )


//Question 4: Write a PHP function to check if a string contains only letters and whitespace.

function containsOnlyLettersAndWhitespace($str) {
    return preg_match('/^[a-zA-Z\s]+$/', $str) === 1;
}

//Use of this function 

$str1 = "Hello world";
$str2 = "Hello123";
$str3 = "Hello, world!";

var_dump(containsOnlyLettersAndWhitespace($str1)); // Output: bool(true)
var_dump(containsOnlyLettersAndWhitespace($str2)); // Output: bool(false)
var_dump(containsOnlyLettersAndWhitespace($str3)); // Output: bool(false)


//Question 5: Write a PHP function to find the second largest number in an array of numbers.

function findSecondLargestNumber($arr) {
    if (count($arr) < 2) {
        return null;
    }
    $largest = $arr[0];
    $secondLargest = $arr[1];
    foreach ($arr as $num) {
        if ($num > $largest) {
            $secondLargest = $largest;
            $largest = $num;
        } else if ($num > $secondLargest && $num != $largest) {
            $secondLargest = $num;
        }
    }
    return $secondLargest;
}

//use of this function

$numbers = array(3, 5, 1, 6, 2, 8);
$secondLargest = findSecondLargestNumber($numbers);
echo "The second largest number is: " . $secondLargest; // Output: The second largest number is: 6
