<?php

namespace Adarsh\Unitly\Factors;

/**
 * Plane angle Conversion Factors
 * 
 * This file contains conversion factors for various units of plane angle. Each entry represents 
 * the conversion factors to and from other common plane angle units, allowing for accurate unit 
 * conversions between plane angle measurements
 * 
 */
return [
    'degree' => [
        'radian' => '(:value * ' . pi() . ') / 180',
        'minute of arc' => ':value * 60',
        'milliradian' => '(:value * (1000 * ' . pi() . ')) / 180',
        'gradian' => '(:value * 200) / 180',
        'arcsecond' => ':value * 3600'
    ],
    'radian' => [
        'degree' => '(:value * 180) / ' . pi(),
        'minute of arc' => '(:value * 60 * 180) / ' . pi(),
        'milliradian' => ':value * 1000',
        'gradian' => '(:value * 200) / ' . pi(),
        'arcsecond' => '(:value * 3600 * 180) / ' . pi()
    ],
];
