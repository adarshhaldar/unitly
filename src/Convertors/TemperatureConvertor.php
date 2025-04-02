<?php

namespace Unitly\Convertors;

use Unitly\Convertors\BaseConvertor;

/**
 * TemperatureConvertor Class
 * 
 * This class extends the `BaseConvertor` class and provides functionality for converting 
 * between different temperature units.
 */
class TemperatureConvertor extends BaseConvertor
{
    /**
     * Constructor to initialize the conversion data in parent class
     * Initializes temperature conversion factors from a data file
     * 
     * @return void
     */
    public function __construct()
    {
        parent::__construct(require 'src/Factors/TemperatureConversionFactor.php');
    }

    /**
     * Converts to or from kelvin
     * 
     * @param float|int|null $kelvin The value in kelvin. If null, assumes chained conversion
     * 
     * @return self
     */
    public function kelvin($kelvin = null): self
    {
        $this->handleConversion('kelvin', $kelvin);
        return $this;
    }


    /**
     * Converts to or from centigrade
     * 
     * @param float|int|null $centigrade The value in centigrade. If null, assumes chained conversion
     * 
     * @return self
     */
    public function centigrade($centigrade = null): self
    {
        $this->handleConversion('centigrade', $centigrade);
        return $this;
    }

    /**
     * Converts to or from fahrenheit
     * 
     * @param float|int|null $fahrenheit The value in fahrenheit. If null, assumes chained conversion
     * 
     * @return self
     */
    public function fahrenheit($fahrenheit = null): self
    {
        $this->handleConversion('fahrenheit', $fahrenheit);
        return $this;
    }
}
