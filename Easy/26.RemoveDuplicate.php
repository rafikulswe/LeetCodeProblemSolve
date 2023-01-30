<?php

/**
 * @param Integer[] $nums
 * @return Integer
 */
function removeDuplicates($nums)
{
    $uniqueQty = 1;
    for ($i = 1; $i < count($nums); $i++) {
        if ($nums[$i] != $nums[$i - 1]) {
            $uniqueQty += 1;
            $nums[$uniqueQty] = $nums[$i];
        }
    }
    return $uniqueQty;
}

echo removeDuplicates([1, 1, 2]);
