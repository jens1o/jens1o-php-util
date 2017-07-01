<?php
namespace jens1o\util\string;

/**
 * Useful functions for strings
 *
 * @author     jens1o
 * @copyright  Jens Hausdorf 2017
 * @license    MIT License
 */

/**
 * Performs the rot transform on a string with given number
 *
 * **WARNING:** This is not suitable for cryptographic purposes!
 *
 * @param   string  $s  The string to transform
 * @param   int     $n  Describes how many rotations will be performed (default: 13)
 * @return string
 * @since 0.3.0
 */
function str_rot(string $s, int $n = 13): string {
    /**
     * List of letters available in the ascii charset
     */
    static $letters = 'AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz';

    $n = (int) $n % 26;

    // $n mod 26 = 0 -> no change
    if(!$n) return $s;

    // preserve values
    if($n < 0) $n += 26;
    // prefer php original implementation in c
    if($n === 13) return \str_rot13($s);

    $rep = \substr($letters, $n * 2) . \substr($letters, 0, $n * 2);
    return \strtr($s, $letters, $rep);
}