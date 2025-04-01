<?php

namespace Adarsh\Unitly\Convertors;

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
     * Performs the unit conversion and stores the result
     * 
     * @param string $type The unit type to convert to
     * @param mixed|null $value The input value for conversion, can be integer, float, or numeric string
     * 
     * @return void
     */
    protected function handleConversion($type, $value)
    {
        $this->validateValue($value);
        $this->setTypes($type, $value);

        if ($this->fromType != $this->toType) {
            if ($this->hasInput && $value) {
                throw new Exception('Can not accept input after initialization');
            }

            $value = $value == null ? $this->result : $value;

            $this->result = $value * ($this->conversions[$this->fromType][$this->toType] ?? 1);
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
    private function validateValue($value)
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
    private function setTypes($type, $value)
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
     * @param int $decimal The number of decimal places for formatting
     * 
     * @return mixed
     */
    public function unify(int $decimal = 0)
    {
        if (!$this->hasInput) {
            throw new Exception('Need a value to convert');
        }

        if ($decimal < 0) {
            throw new Exception('Decimal point can not be negative');
        }

        $result = $this->result ?? 0;
        return $decimal > 0 ? (($result < pow(10, -$decimal)) ? sprintf('%.' . $decimal . 'e', $result) : sprintf('%.' . $decimal . 'f', $result)) : $result;
    }

    /**
     * Resets all stored conversion data, allowing a fresh conversion
     * 
     * 
     * @return void
     */
    public function clear()
    {
        $this->fromType = $this->toType = $this->result = $this->hasInput = $this->initialConversionType = null;
    }
}
