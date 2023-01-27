<?php

// /**
//  * @param Integer $number
//  * @return Boolean
//  */
function isPalindrome($number)
{
    // MAKING REVERSE NUMBER
    $mainNumber = $number;
    $revnum  = 0;
    while ($mainNumber >= 1) {
        $rem = $mainNumber % 10;
        $revnum = ($revnum * 10) + $rem;
        $mainNumber = floor($mainNumber / 10);
    }

    if ($number === $revnum) {
        return 'Yes';
    } else {
        return $revnum;
    }
}

echo isPalindrome(121);
