<?php
function longestWord($str) {
    $words = explode(' ', $str); // Split the string into an array of words
    $longestWord = '';
    foreach ($words as $word) {
        if (strlen($word) > strlen($longestWord)) {
            $longestWord = $word;
        }
    }
    return $longestWord;
}


$str = "The quick brown fox jumped over the lazy dog";
echo longestWord($str);    // Output: jumped
