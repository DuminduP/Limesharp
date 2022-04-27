<?php

/**
 * Return the next binay number
 * @param array $inputArray
 * @return array
 */
function next_binary_number(array $inputArray): array
{
    $done = false;
    $count = count($inputArray);
    $outArray = [];

    //Find the first 0 in reverse order
    for ($i = $count - 1; $i >= 0; $i--) {
        if ($done == false && $inputArray[$i] == 0) {
            $outArray[$i] = 1;
            $done = true;
            if (isset($outArray[$i + 1]) && $outArray[$i + 1] == 1) {
                $outArray[$i + 1] = 0;
            }
        } else {
            $outArray[$i] = $inputArray[$i];
        }
    }

    // No zeors found
    if (!$done) {
        $outArray = [];
        $outArray[0] = 1;
        for ($i = 1; $i <= $count; $i++) {
            $outArray[$i] = 0;
        }
        return $outArray;
    }

    //Reorder the return array
    $out = [];
    for ($i = 0; $i < $count; $i++) {
        $out[] = $outArray[$i];
    }

    return $out;
}

echo implode(",", next_binary_number([1,0,0,0,0,0,0,0,0,1]));
