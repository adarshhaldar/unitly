<?php

namespace Adarsh\Unitly\Factors;

/**
 * Temperature Conversion Factors
 * 
 * This file contains conversion factors for various units of temperature. Each entry represents 
 * the conversion factors to and from other common temperature units, allowing for accurate unit 
 * conversions between temperature measurements
 * 
 */
return [
    'kelvin' => [
        'centigrade' => ':value - 273.15',
        'fahrenheit' => '(((:value - 273.15) * 9) / 5) + 32',
    ],
    'centigrade' => [
        'kelvin' => ':value + 273.15',
        'fahrenheit' => '((:value * 9) / 5) + 32',
    ],
    'fahrenheit' => [
        'centigrade' => '((:value - 32) * 5) / 9',
        'kelvin' => '(((:value - 32) * 5) / 9) + 273.15',
    ],
];
