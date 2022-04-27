<?php

/**
 * Repeat 3 times the contents of an array
 * @param array $inputArray
 * @return array
 */
function repeat(array $inputArray): array
{
    return array_merge($inputArray, $inputArray, $inputArray);
}


print_r(repeat([1, 2, 3]));
