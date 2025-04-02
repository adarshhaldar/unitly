<?php

namespace Adarsh\Unitly\Factors;

/**
 * Weight Conversion Factors
 * 
 * This file contains conversion factors for various units of weight. Each entry represents 
 * the conversion factors to and from other common weight units', allowing for accurate unit 
 * conversions between weight measurements.
 * 
 */
return [
    'ounce' => [
        'pound' => ':value / 16',
        'stone' => ':value / 224',
        'us ton' => ':value / 32000',
        'imperial ton' => ':value / 35840',
        'microgram' => ':value * 2.835e+7',
        'milligram' => ':value * 28350',
        'gram' => ':value * 28.35',
        'kilogram' => ':value / 35.274',
        'tonne' => ':value / 35270'
    ],
    'pound' => [
        'ounce' => ':value * 16',
        'stone' => ':value / 14',
        'us ton' => ':value / 2000',
        'imperial ton' => ':value / 2240',
        'microgram' => ':value * 4.536e+8',
        'milligram' => ':value * 453600',
        'gram' => ':value * 453.6',
        'kilogram' => ':value / 2.205',
        'tonne' => ':value / 2205'
    ],
    'stone' => [
        'ounce' => ':value * 224',
        'pound' => ':value * 14',
        'us ton' => ':value / 142.9',
        'imperial ton' => ':value / 160',
        'microgram' => ':value * 6.35e+9',
        'milligram' => ':value * 6.35e+6',
        'gram' => ':value * 6350',
        'kilogram' => ':value * 6.35',
        'tonne' => ':value / 157.5'
    ],
    'us ton' => [
        'ounce' => ':value * 32000',
        'pound' => ':value * 2000',
        'stone' => ':value * 142.9',
        'imperial ton' => ':value / 1.12',
        'microgram' => ':value * 9.072e+11',
        'milligram' => ':value * 9.072e+8',
        'gram' => ':value * 907200',
        'kilogram' => ':value * 907.2',
        'tonne' => ':value / 1.102'
    ],
    'us ton' => [
        'ounce' => ':value * 32000',
        'pound' => ':value * 2000',
        'stone' => ':value * 142.9',
        'imperial ton' => ':value / 1.12',
        'microgram' => ':value * 9.072e+11',
        'milligram' => ':value * 9.072e+8',
        'gram' => ':value * 907200',
        'kilogram' => ':value * 907.2',
        'tonne' => ':value / 1.102'
    ],
    'imperial ton' => [
        'ounce' => ':value * 35840',
        'pound' => ':value * 2240',
        'stone' => ':value * 160',
        'us ton' => ':value * 1.12',
        'microgram' => ':value * 1.016e+12',
        'milligram' => ':value * 1.016e+9',
        'gram' => ':value * 1.016e+6',
        'kilogram' => ':value * 1016',
        'tonne' => ':value * 1.016'
    ],
    'microgram' => [
        'ounce' => ':value / 2.835e+7',
        'pound' => ':value / 4.536e+8',
        'stone' => ':value / 6.35e+9',
        'us ton' => ':value / 9.072e+11',
        'imperial ton' => ':value / 1.016e+12',
        'milligram' => ':value / 1000',
        'gram' => ':value / 1e+6',
        'kilogram' => ':value / 1e+9',
        'tonne' => ':value / 1e+12'
    ],
    'milligram' => [
        'ounce' => ':value / 28350',
        'pound' => ':value / 453600',
        'stone' => ':value / 6.35e+6',
        'us ton' => ':value / 9.072e+8',
        'imperial ton' => ':value / 1.016e+9',
        'microgram' => ':value * 1000',
        'gram' => ':value / 1000',
        'kilogram' => ':value / 1e+6',
        'tonne' => ':value / 1e+9'
    ],
    'gram' => [
        'ounce' => ':value / 28.35',
        'pound' => ':value / 453.6',
        'stone' => ':value / 6350',
        'us ton' => ':value / 907200',
        'imperial ton' => ':value / 1.016e+6',
        'microgram' => ':value * 1e+6',
        'milligram' => ':value * 1000',
        'kilogram' => ':value / 1000',
        'tonne' => ':value / 1e+6'
    ],
    'kilogram' => [
        'ounce' =>  ':value * 35.274',
        'pound' => ':value * 2.205',
        'stone' => ':value / 6.35',
        'us ton' => ':value / 907.2',
        'imperial ton' => ':value / 1016',
        'microgram' => ':value * 1e+9',
        'milligram' => ':value * 1e+6',
        'gram' => ':value * 1000',
        'tonne' => ':value / 1000'
    ],
    'tonne' => [
        'ounce' =>  ':value * 35270',
        'pound' => ':value * 2205',
        'stone' => ':value * 157.5',
        'us ton' => ':value * 1.102',
        'imperial ton' => ':value / 1.016',
        'microgram' => ':value * 1e+12',
        'milligram' => ':value * 1e+9',
        'gram' => ':value * 1e+6',
        'killogram' => ':value * 1000'
    ],
];
