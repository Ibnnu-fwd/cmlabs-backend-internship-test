<?php

function isPalindrome($str)
{
    $reversedStr = strrev($str);
    return $str === $reversedStr ? 'palindrome' : 'bukan palindrome';
}

echo isPalindrome('ibnu'); // bukan palindrome
echo "\n";
echo isPalindrome('katak'); // palindrome
