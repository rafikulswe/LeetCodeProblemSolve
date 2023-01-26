<?php

/**
 * @param integer[] $nums
 * @param integer $target
 * @return integer[]
 */
function twoSum($nums, $target)
{
    foreach ($nums as $key => $value) {
        unset($nums[$key]);
        if ($key2 = array_search($target - $value, $nums)) {
            return [$key, $key2];
        }
    }
    return [];
}

$output = twoSum([2, 7, 11,  15], 9);
print_r($output);
