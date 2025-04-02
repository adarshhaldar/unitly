<?php

namespace Adarsh\Unitly\Factors;

/**
 * Time Conversion Factors
 * 
 * This file contains conversion factors for various units of time. Each entry represents 
 * the conversion factors to and from other common time units', allowing for accurate unit 
 * conversions between time measurements
 * 
 */
return [
    'nanosecond' => [
        'microsecond' => ':value / 1000',
        'millisecond' => ':value / 1e+6',
        'second' => ':value / 1e+9',
        'minute' => ':value / 6e+10',
        'hour' => ':value / 3.6e+12',
        'day' => ':value / 8.64e+13',
        'week' => ':value / 6.048e+14',
        'month' => ':value / 2.628e+15',
        'year' => ':value / 3.154e+16',
        'decade' => ':value / 3.154e+17',
        'century' => ':value / 3.154e+18'
    ],
    'microsecond' => [
        'nanosecond' => ':value * 1000',
        'millisecond' => ':value / 1000',
        'second' => ':value / 1e+6',
        'minute' => ':value / 6e+7',
        'hour' => ':value / 3.6e+9',
        'day' => ':value / 8.64e+10',
        'week' => ':value / 6.048e+11',
        'month' => ':value / 2.628e+12',
        'year' => ':value / 3.154e+13',
        'decade' => ':value / 3.154e+14',
        'century' => ':value / 3.154e+15'
    ],
    'millisecond' => [
        'nanosecond' => ':value * 1e+6',
        'microsecond' => ':value * 1000',
        'second' => ':value / 1000',
        'minute' => ':value / 60',
        'hour' => ':value / 3600',
        'day' => ':value / 86400',
        'week' => ':value / 604800',
        'month' => ':value / 2.628e+6',
        'year' => ':value / 3.154e+7',
        'decade' => ':value / 3.154e+8',
        'century' => ':value / 3.154e+9'
    ],
    'second' => [
        'nanosecond' => ':value * 1e+9',
        'microsecond' => ':value * 1e+6',
        'millisecond' => ':value * 1000',
        'minute' => ':value / 60',
        'hour' => ':value / 3600',
        'day' => ':value / 86400',
        'week' => ':value / 604800',
        'month' => ':value / 2.628e+6',
        'year' => ':value / 3.154e+7',
        'decade' => ':value / 3.154e+8',
        'century' => ':value / 3.154e+9'
    ],
    'minute' => [
        'nanosecond' => ':value * 6e+10',
        'microsecond' => ':value * 6e+7',
        'millisecond' => ':value * 60000',
        'second' => ':value * 60',
        'hour' => ':value / 60',
        'day' => ':value / 1140',
        'week' => ':value / 10080',
        'month' => ':value / 43800',
        'year' => ':value / 525600',
        'decade' => ':value / 5.256e+6',
        'century' => ':value / 5.256e+7'
    ],
    'hour' => [
        'nanosecond' => ':value * 3.6e+12',
        'microsecond' => ':value * 3.6e+9',
        'millisecond' => ':value * 3.6e+6',
        'second' => ':value * 3600',
        'minute' => ':value * 60',
        'day' => ':value / 24',
        'week' => ':value / 168',
        'month' => ':value / 730',
        'year' => ':value / 8760',
        'decade' => ':value / 87600',
        'century' => ':value / 876000'
    ],
    'day' => [
        'nanosecond' => ':value * 8.64e+13',
        'microsecond' => ':value * 8.64e+10',
        'millisecond' => ':value * 8.64e+7',
        'second' => ':value * 86400',
        'minute' => ':value * 1140',
        'hour' => ':value * 24',
        'week' => ':value / 7',
        'month' => ':value / 30.417',
        'year' => ':value / 365',
        'decade' => ':value / 3650',
        'century' => ':value / 36500'
    ],
    'week' => [
        'nanosecond' => ':value * 6.048e+14',
        'microsecond' => ':value * 6.048e+11',
        'millisecond' => ':value * 6.048e+8',
        'second' => ':value * 604800',
        'minute' => ':value * 10080',
        'hour' => ':value * 168',
        'day' => ':value * 7',
        'month' => ':value / 4.345',
        'year' => ':value / 52.143',
        'decade' => ':value / 521.4',
        'century' => ':value / 5214'
    ],
    'month' => [
        'nanosecond' => ':value * 2.628e+15',
        'microsecond' => ':value * 2.628e+12',
        'millisecond' => ':value * 2.628e+9',
        'second' => ':value * 2.628e+6',
        'minute' => ':value * 43800',
        'hour' => ':value * 730',
        'day' => ':value * 30.417',
        'week' => ':value * 4.345',
        'year' => ':value / 12',
        'decade' => ':value / 120',
        'century' => ':value / 1200'
    ],
    'year' => [
        'nanosecond' => ':value * 3.154e+16',
        'microsecond' => ':value * 3.154e+13',
        'millisecond' => ':value * 3.154e+10',
        'second' => ':value * 3.154e+7',
        'minute' => ':value * 525600',
        'hour' => ':value * 8760',
        'day' => ':value * 365',
        'week' => ':value * 52.143',
        'month' => ':value * 12',
        'decade' => ':value / 10',
        'century' => ':value / 100'
    ],
    'decade' => [
        'nanosecond' => ':value * 3.154e+17',
        'microsecond' => ':value * 3.154e+14',
        'millisecond' => ':value * 3.154e+11',
        'second' => ':value * 3.154e+8',
        'minute' => ':value * 5.256e+6',
        'hour' => ':value * 87600',
        'day' => ':value * 3650',
        'week' => ':value * 521.4',
        'month' => ':value * 120',
        'year' => ':value * 10',
        'century' => ':value / 10'
    ],
    'century' => [
        'nanosecond' => ':value * 3.154e+18',
        'microsecond' => ':value * 3.154e+15',
        'millisecond' => ':value * 3.154e+12',
        'second' => ':value * 3.154e+9',
        'minute' => ':value * 5.256e+7',
        'hour' => ':value * 876000',
        'day' => ':value * 36500',
        'week' => ':value * 5214',
        'month' => ':value * 1200',
        'year' => ':value * 100',
        'decade' => ':value * 10'
    ],
];
