<?php

/**
 * Format a string by removing vowels & lowercase except the first letter
 * @param string $inputString
 * @return string
 */
function reformat(string $inputString): string
{
    $inputString = strtolower($inputString);
    $inputString = str_replace(['a', 'e', 'i', 'o', 'u'], '', $inputString);
    return ucfirst($inputString);
}

echo reformat("liMeSHArp DeveLoper TEST");
