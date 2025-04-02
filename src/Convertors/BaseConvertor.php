<?php

namespace Unitly\Convertors;

use Exception;

/**
 * BaseConvertor Class
 * 
 * This class provides core functionality for unit conversions. It handles the conversion process 
 * by using predefined conversion factors for different unit types.
 * 
 * This class is designed to be extended and reused by specific unit converters
 * that provide unit-specific conversions.
 */
class BaseConvertor
{
    /**
     * Conversion data
     * 
     * @var array
     */
    private $conversions = [];

    /**
     * From type (converting input from)
     * 
     * @var string|null
     */
    private $fromType = null;

    /**
     * To type (converting input to)
     * 
     * @var string|null
     */
    private $toType = null;

    /**
     * Result after conversion
     * 
     * @var mixed|null
     */
    private $result = null;

    /**
     * Has input check for initialization
     * 
     * @var bool
     */
    private $hasInput = false;

    /**
     * Initial conversion type of the input
     * 
     * @var string|null
     */
    private $initialConversionType = null;

    /**
     * Constructor to initialize the conversion data
     * 
     * @param array $conversions Array of conversion factors for various units
     * 
     * @return void
     */
    protected function __construct($conversions)
    {
        $this->conversions = $conversions;
    }

    /**
     * Converts a given value from one unit to another
     * 
     * @param mixed $value The numerical value to convert
     * @param string $from The unit type to convert from
     * @param string $to The unit type to convert to
     * @param int $precision The number of decimal places for formatting
     * 
     * @return float|int
     */
    public function convert(mixed $value, string $from, string $to, int $precision = 0): float|int
    {
        $from = strtolower($from);
        $to = strtolower($to);

        $this->validateConversionTypes($from, $to);
        $this->validateValue($value);

        $result = $value * ($this->conversions[$from][$to] ?? 1);

        return $precision > 0 ? (($result < pow(10, -$precision)) ? sprintf('%.' . $precision . 'e', $result) : sprintf('%.' . $precision . 'f', $result)) : $result;
    }

    /**
     * Validates conversion types
     * 
     * @param string $from The unit type being converted from
     * @param string $to The unit type being converted to
     */
    private function validateConversionTypes(string $from, string $to): void
    {
        if (!isset($this->conversions[$from])) {
            throw new Exception(ucfirst(strtolower($from)) . ' type is invalid');
        }

        if (!isset($this->conversions[$to])) {
            throw new Exception(ucfirst(strtolower($to)) . ' type is invalid');
        }

        if (!isset($this->conversions[$from][$to])) {
            throw new Exception(ucfirst(strtolower($from)) . ' to ' . ucfirst(strtolower($to)) . ' conversion is out of bound');
        }
    }

    /**
     * Performs the unit conversion and stores the result
     * 
     * @param string $type The unit type to convert to
     * @param mixed|null $value The input value for conversion, can be integer, float, or numeric string
     * 
     * @return void
     */
    protected function handleConversion(string $type, mixed $value): void
    {
        $value ? $this->validateValue($value) : true;
        $this->setTypes($type, $value);

        if ($this->fromType != $this->toType) {
            if ($this->hasInput && $value) {
                throw new Exception('Can not accept input after initialization');
            }

            $value = $value == null ? $this->result : $value;

            $this->result = eval('return ' . str_replace(':value', $value, $this->conversions[$this->fromType][$this->toType]) . ';');
        } else {
            $this->result = $value ?? $this->result;
        }
    }

    /**
     * Checks if the input value is numeric and valid for conversion
     * 
     * @param mixed|null $value The value to be validated
     * 
     * @return void
     */
    private function validateValue(mixed $value): void
    {
        if (is_string($value)) {
            is_numeric($value) && !preg_match('/[^\d\.\-]/', $value) ?? throw new Exception('Only numeric value are accepted');
        }

        is_int($value) || is_float($value) ?? throw new Exception('Only numeric value are accepted');
    }

    /**
     * Determines the conversion type and updates internal state
     * 
     * @param string $type The unit type being converted
     * @param mixed|null $value The input value
     * 
     * @return void
     */
    private function setTypes(string $type, mixed $value): void
    {
        if ($this->initialConversionType == null && $value) {
            $this->initialConversionType = $this->fromType = $this->toType = $type;
        } else {
            $this->fromType = $this->toType;
            $this->toType = $type;
        }

        $this->hasInput = $this->hasInput ? true : ($this->initialConversionType && $value ? true : false);
    }

    /**
     * Function to return the result
     * 
     * @param int $precision The number of decimal places for formatting
     * 
     * @return mixed
     */
    public function unify(int $precision = 0): mixed
    {
        if (!$this->hasInput) {
            throw new Exception('Need a value to convert');
        }

        if ($precision < 0) {
            throw new Exception('Decimal point can not be negative');
        }

        $result = $this->result ?? 0;

        return $precision > 0 ? (($result < pow(10, -$precision)) ? sprintf('%.' . $precision . 'e', $result) : sprintf('%.' . $precision . 'f', $result)) : $result;
    }

    /**
     * Get list of unit types for conversion
     * 
     * @return array
     */
    public function getUnitTypes(): array
    {
        return array_map(function ($unitType) {
            return ucfirst(strtolower($unitType));
        }, array_keys($this->conversions));
    }

    /**
     * Resets all stored conversion data, allowing a fresh conversion
     * 
     * @return void
     */
    public function clear(): void
    {
        $this->fromType = $this->toType = $this->result = $this->hasInput = $this->initialConversionType = null;
    }
}
