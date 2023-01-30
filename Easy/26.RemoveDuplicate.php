<?php

/**
 * @param Integer[] $nums
 * @return Integer
 */
function removeDuplicates($nums)
{
    $uniqueQty = 1;
    $i = 0;
    for ($j = 1; $j < count($nums); $j++) {
        if ($nums[$i] != $nums[$j]) {
            $i++;
            $uniqueQty += 1;
            $nums[$i] = $nums[$j];
        }
    }
    return $uniqueQty;
}

echo removeDuplicates([1, 1, 2]);
