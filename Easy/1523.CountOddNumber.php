<?php

class Solution
{

    // /**
    //  * @param Integer $low
    //  * @param Integer $high
    //  * @return Integer
    //  */
    function countOdds($low, $high)
    {
        $count = $high - $low + 1;

        if ((($high + $low) % 2) != 0) { // if two numbers sum are odd
            return $count / 2;
        } else { // if two numbers sum are even
            if (($low % 2) != 0) { // if low are odd
                return ($count + 1) / 2;
            } else { // if low are even
                return ($count - 1) / 2;
            }
        }
    }
}

$obj = new Solution();
echo $obj->countOdds(6, 10);
