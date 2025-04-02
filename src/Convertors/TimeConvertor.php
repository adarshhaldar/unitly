<?php

namespace Unitly\Convertors;

use Unitly\Convertors\BaseConvertor;

/**
 * TimeConvertor Class
 * 
 * This class extends the `BaseConvertor` class and provides functionality for converting 
 * between different time units.
 */
class TimeConvertor extends BaseConvertor
{
    /**
     * Constructor to initialize the conversion data in parent class
     * Initializes time conversion factors from a data file
     * 
     * @return void
     */
    public function __construct()
    {
        parent::__construct(require 'src/Factors/TimeConversionFactor.php');
    }

    /**
     * Converts to or from nanoseconds
     * 
     * @param float|int|null $nanosecond The value in nanoseconds. If null, assumes chained conversion
     * 
     * @return self
     */
    public function nanosecond($nanosecond = null): self
    {
        $this->handleConversion('nanosecond', $nanosecond);
        return $this;
    }

    /**
     * Converts to or from microseconds
     * 
     * @param float|int|null $microsecond The value in microseconds. If null, assumes chained conversion
     * 
     * @return self
     */
    public function microsecond($microsecond = null): self
    {
        $this->handleConversion('microsecond', $microsecond);
        return $this;
    }

    /**
     * Converts to or from milliseconds
     * 
     * @param float|int|null $millisecond The value in milliseconds. If null, assumes chained conversion
     * 
     * @return self
     */
    public function millisecond($millisecond = null): self
    {
        $this->handleConversion('millisecond', $millisecond);
        return $this;
    }

    /**
     * Converts to or from seconds
     * 
     * @param float|int|null $second The value in seconds. If null, assumes chained conversion
     * 
     * @return self
     */
    public function second($second = null): self
    {
        $this->handleConversion('second', $second);
        return $this;
    }

    /**
     * Converts to or from minutes
     * 
     * @param float|int|null $minute The value in minutes. If null, assumes chained conversion
     * 
     * @return self
     */
    public function minute($minute = null): self
    {
        $this->handleConversion('minute', $minute);
        return $this;
    }

    /**
     * Converts to or from hours
     * 
     * @param float|int|null $hour The value in hours. If null, assumes chained conversion
     * 
     * @return self
     */
    public function hour($hour = null): self
    {
        $this->handleConversion('hour', $hour);
        return $this;
    }

    /**
     * Converts to or from days
     * 
     * @param float|int|null $day The value in days. If null, assumes chained conversion
     * 
     * @return self
     */
    public function day($day = null): self
    {
        $this->handleConversion('day', $day);
        return $this;
    }

    /**
     * Converts to or from weeks
     * 
     * @param float|int|null $week The value in weeks. If null, assumes chained conversion
     * 
     * @return self
     */
    public function week($week = null): self
    {
        $this->handleConversion('week', $week);
        return $this;
    }

    /**
     * Converts to or from months
     * 
     * @param float|int|null $month The value in months. If null, assumes chained conversion
     * 
     * @return self
     */
    public function month($month = null): self
    {
        $this->handleConversion('month', $month);
        return $this;
    }

    /**
     * Converts to or from years
     * 
     * @param float|int|null $year The value in years. If null, assumes chained conversion
     * 
     * @return self
     */
    public function year($year = null): self
    {
        $this->handleConversion('year', $year);
        return $this;
    }

    /**
     * Converts to or from decades
     * 
     * @param float|int|null $decade The value in decades. If null, assumes chained conversion
     * 
     * @return self
     */
    public function decade($decade = null): self
    {
        $this->handleConversion('decade', $decade);
        return $this;
    }

    /**
     * Converts to or from a century
     * 
     * @param float|int|null $century The value in centuries. If null, assumes chained conversion
     * 
     * @return self
     */
    public function century($century = null): self
    {
        $this->handleConversion('century', $century);
        return $this;
    }
}
