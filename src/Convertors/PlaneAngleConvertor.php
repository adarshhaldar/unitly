<?php

namespace Unitly\Convertors;

use Unitly\Convertors\BaseConvertor;

/**
 * PlaneAngleConvertor Class
 * 
 * This class extends the `BaseConvertor` class and provides functionality for converting 
 * between different plane angle units.
 */
class PlaneAngleConvertor extends BaseConvertor
{
    /**
     * Constructor to initialize the conversion data in parent class
     * Initializes plane angle conversion factors from a data file
     * 
     * @return void
     */
    public function __construct()
    {
        parent::__construct(require 'src/Factors/PlaneAngleConversionFactor.php');
    }

    /**
     * Converts to or from degree
     * 
     * @param float|int|null $degree The value in degree. If null, assumes chained conversion
     * 
     * @return self
     */
    public function degree($degree = null): self
    {
        $this->handleConversion('degree', $degree);
        return $this;
    }


    /**
     * Converts to or from radian
     * 
     * @param float|int|null $radian The value in radian. If null, assumes chained conversion
     * 
     * @return self
     */
    public function radian($radian = null): self
    {
        $this->handleConversion('radian', $radian);
        return $this;
    }
}
