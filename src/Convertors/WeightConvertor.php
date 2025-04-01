<?php

namespace Adarsh\Unitly\Convertors;

use Adarsh\Unitly\Convertors\BaseConvertor;

/**
 * WeightConvertor Class
 * 
 * This class extends the `BaseConvertor` class and provides functionality for converting 
 * between different weight units.
 */
class WeightConvertor extends BaseConvertor
{
    /**
     * Constructor to initialize the conversion data in parent class
     * Initializes weight conversion factors from a data file
     * 
     * @return void
     */
    public function __construct()
    {
        parent::__construct(require 'src/Data/WeightConversionData.php');
    }

    /**
     * Converts to or from ounces
     * 
     * @param float|int|null $ounce The value in ounces. If null, assumes chained conversion
     * 
     * @return self
     */
    public function ounce($ounce = null)
    {
        $this->handleConversion('ounce', $ounce);
        return $this;
    }

    /**
     * Converts to or from pounds
     * 
     * @param float|int|null $pound The value in pounds. If null, assumes chained conversion
     * 
     * @return self
     */
    public function pound($pound = null)
    {
        $this->handleConversion('pound', $pound);
        return $this;
    }


    /**
     * Converts to or from stones
     * 
     * @param float|int|null $stone The value in stones. If null, assumes chained conversion
     * 
     * @return self
     */
    public function stone($stone = null)
    {
        $this->handleConversion('stone', $stone);
        return $this;
    }

    /**
     * Converts to or from US tons
     * 
     * @param float|int|null $usTon The value in US tons. If null, assumes chained conversion
     * 
     * @return self
     */
    public function usTon($usTon = null)
    {
        $this->handleConversion('us_ton', $usTon);
        return $this;
    }

    /**
     * Converts to or from imperial tons
     * 
     * @param float|int|null $imperialTon The value in Imperial tons. If null, assumes chained conversion
     * 
     * @return self
     */
    public function imperialTon($imperialTon = null)
    {
        $this->handleConversion('imperial_ton', $imperialTon);
        return $this;
    }

    /**
     * Converts to or from micrograms
     * 
     * @param float|int|null $microgram The value in micrograms. If null, assumes chained conversion
     * 
     * @return self
     */
    public function microgram($microgram = null)
    {
        $this->handleConversion('microgram', $microgram);
        return $this;
    }

    /**
     * Converts to or from milligrams
     * 
     * @param float|int|null $milligram The value in milligrams. If null, assumes chained conversion
     * 
     * @return self
     */
    public function milligram($milligram = null)
    {
        $this->handleConversion('milligram', $milligram);
        return $this;
    }

    /**
     * Converts to or from grams
     * 
     * @param float|int|null $gram The value in grams. If null, assumes chained conversion
     * 
     * @return self
     */
    public function gram($gram = null)
    {
        $this->handleConversion('gram', $gram);
        return $this;
    }

    /**
     * Converts to or from kilograms
     * 
     * @param float|int|null $kilogram The value in kilograms. If null, assumes chained conversion
     * 
     * @return self
     */
    public function kilogram($kilogram = null)
    {
        $this->handleConversion('kilogram', $kilogram);
        return $this;
    }

    /**
     * Converts to or from tonnes
     * 
     * @param float|int|null $tonne The value in tonnes. If null, assumes chained conversion
     * 
     * @return self
     */
    public function tonne($tonne = null)
    {
        $this->handleConversion('tonne', $tonne);
        return $this;
    }
}
