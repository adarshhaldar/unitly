<?php

namespace Adarsh\Unitly\Convertors;

use Exception;

class BaseConvertor
{
    /**
     * Conversion details
     */
    private $conversions = [];

    /**
     * From type (converting input from)
     */
    private $fromType = null;

    /**
     * To type (converting input to)
     */
    private $toType = null;

    /**
     * Result after conversion
     */
    private $result = null;

    /**
     * Has input check for initialization
     */
    private $hasInput = false;

    /**
     * Innitial conversion type of the input
     */
    private $initialConversionType = null;

    protected function __construct($conversions)
    {
        $this->conversions = $conversions;
    }

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

    private function validateValue($value)
    {
        if (is_string($value)) {
            is_numeric($value) && !preg_match('/[^\d\.\-]/', $value) ?? throw new Exception('Only numeric value are accepted');
        }

        is_int($value) || is_float($value) ?? throw new Exception('Only numeric value are accepted');
    }

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

    public function unify(int $decimal = 0)
    {
        if (!$this->hasInput) {
            throw new Exception('Need a value to convert');
        }

        if($decimal < 0){
            throw new Exception('Decimal point can not be negative');
        }

        $result = $this->result ?? 0;
        return $decimal > 0 ? (($result < pow(10, -$decimal)) ? sprintf('%.' . $decimal . 'e', $result) : sprintf('%.' . $decimal . 'f', $result)) : $result;
    }

    public function clear()
    {
        $this->fromType = $this->toType = $this->result = $this->hasInput = $this->initialConversionType = null;
    }
}
