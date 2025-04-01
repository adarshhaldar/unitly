<?php

namespace Adarsh\Unitly\Data;

/**
 * Time Conversion Factors Data
 * 
 * This file contains conversion factors for various units of time. Each entry represents 
 * the conversion factors to and from other common time units, allowing for accurate unit 
 * conversions between time measurements
 * 
 */
return [
    'nanosecond' => [
        'microsecond' => 1 / 1000,
        'millisecond' => 1 / 1e+6,
        'second' => 1 / 1e+9,
        'minute' => 1 / 6e+10,
        'hour' => 1 / 3.6e+12,
        'day' => 1 / 8.64e+13,
        'week' => 1 / 6.048e+14,
        'month' => 1 / 2.628e+15,
        'year' => 1 / 3.154e+16,
        'decade' => 1 / 3.154e+17,
        'century' => 1 / 3.154e+18
    ],
    'microsecond' => [
        'nanosecond' => 1000,
        'millisecond' => 1 / 1000,
        'second' => 1 / 1e+6,
        'minute' => 1 / 6e+7,
        'hour' => 1 / 3.6e+9,
        'day' => 1 / 8.64e+10,
        'week' => 1 / 6.048e+11,
        'month' => 1 / 2.628e+12,
        'year' => 1 / 3.154e+13,
        'decade' => 1 / 3.154e+14,
        'century' => 1 / 3.154e+15
    ],
    'millisecond' => [
        'nanosecond' => 1e+6,
        'microsecond' => 1000,
        'second' => 1 / 1000,
        'minute' => 1 / 60,
        'hour' => 1 / 3600,
        'day' => 1 / 86400,
        'week' => 1 / 604800,
        'month' => 1 / 2.628e+6,
        'year' => 1 / 3.154e+7,
        'decade' => 1 / 3.154e+8,
        'century' => 1 / 3.154e+9
    ],
    'second' => [
        'nanosecond' => 1e+9,
        'microsecond' => 1e+6,
        'millisecond' => 1000,
        'minute' => 1 / 60,
        'hour' => 1 / 3600,
        'day' => 1 / 86400,
        'week' => 1 / 604800,
        'month' => 1 / 2.628e+6,
        'year' => 1 / 3.154e+7,
        'decade' => 1 / 3.154e+8,
        'century' => 1 / 3.154e+9
    ],
    'minute' => [
        'nanosecond' => 6e+10,
        'microsecond' => 6e+7,
        'millisecond' => 60000,
        'second' => 60,
        'hour' => 1 / 60,
        'day' => 1 / 1140,
        'week' => 1 / 10080,
        'month' => 1 / 43800,
        'year' => 1 / 525600,
        'decade' => 1 / 5.256e+6,
        'century' => 1 / 5.256e+7
    ],
    'hour' => [
        'nanosecond' => 3.6e+12,
        'microsecond' => 3.6e+9,
        'millisecond' => 3.6e+6,
        'second' => 3600,
        'minute' => 60,
        'day' => 1 / 24,
        'week' => 1 / 168,
        'month' => 1 / 730,
        'year' => 1 / 8760,
        'decade' => 1 / 87600,
        'century' => 1 / 876000
    ],
    'day' => [
        'nanosecond' => 8.64e+13,
        'microsecond' => 8.64e+10,
        'millisecond' => 8.64e+7,
        'second' => 86400,
        'minute' => 1140,
        'hour' => 24,
        'week' => 1 / 7,
        'month' => 1 / 30.417,
        'year' => 1 / 365,
        'decade' => 1 / 3650,
        'century' => 1 / 36500
    ],
    'week' => [
        'nanosecond' => 6.048e+14,
        'microsecond' => 6.048e+11,
        'millisecond' => 6.048e+8,
        'second' => 604800,
        'minute' => 10080,
        'hour' => 168,
        'day' => 7,
        'month' => 1 / 4.345,
        'year' => 1 / 52.143,
        'decade' => 1 / 521.4,
        'century' => 1 / 5214
    ],
    'month' => [
        'nanosecond' => 2.628e+15,
        'microsecond' => 2.628e+12,
        'millisecond' => 2.628e+9,
        'second' => 2.628e+6,
        'minute' => 43800,
        'hour' => 730,
        'day' => 30.417,
        'week' => 4.345,
        'year' => 1 / 12,
        'decade' => 1 / 120,
        'century' => 1 / 1200
    ],
    'year' => [
        'nanosecond' => 3.154e+16,
        'microsecond' => 3.154e+13,
        'millisecond' => 3.154e+10,
        'second' => 3.154e+7,
        'minute' => 525600,
        'hour' => 8760,
        'day' => 365,
        'week' => 52.143,
        'month' => 12,
        'decade' => 1 / 10,
        'century' => 1 / 100
    ],
    'decade' => [
        'nanosecond' => 3.154e+17,
        'microsecond' => 3.154e+14,
        'millisecond' => 3.154e+11,
        'second' => 3.154e+8,
        'minute' => 5.256e+6,
        'hour' => 87600,
        'day' => 3650,
        'week' => 521.4,
        'month' => 120,
        'year' => 10,
        'century' => 1 / 10
    ],
    'century' => [
        'nanosecond' => 3.154e+18,
        'microsecond' => 3.154e+15,
        'millisecond' => 3.154e+12,
        'second' => 3.154e+9,
        'minute' => 5.256e+7,
        'hour' => 876000,
        'day' => 36500,
        'week' => 5214,
        'month' => 1200,
        'year' => 100,
        'decade' => 10
    ],
];
