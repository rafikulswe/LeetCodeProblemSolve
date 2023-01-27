<?php

/**
 * @param integer $number
 * @return integer $reverseNumber
 */

function reverseNumber($number)
{
    $mainNumber = $number;
    $reverseNumber  = 0;
    while ($mainNumber >= 1) {
        $rem = $mainNumber % 10;
        $reverseNumber = ($reverseNumber * 10) + $rem;
        $mainNumber = floor($mainNumber / 10);
    }
    return $reverseNumber;
}

echo reverseNumber(23456);
