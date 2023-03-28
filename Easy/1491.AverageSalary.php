<?php

class Solution
{

    // /**
    //  * @param Integer[] $salary
    //  * @return Float
    //  */
    function averageSalary($salary)
    {
        $max = 0;
        $min = 0;
        $sum = 0;
        foreach ($salary as $key => $value) {
            if ($value > $max) {
                $max = $value;
            }

            if ($key == 0) {
                $min = $value;
            }
            if ($value < $min) {
                $min = $value;
            }

            $sum += $value;
        }
        $finalSumAvg = ($sum - ($max + $min)) / (count($salary) - 2);
        return $finalSumAvg;
    }
}

$solution = new Solution();
echo $solution->averageSalary(array(4000, 3000, 2000, 1000));
