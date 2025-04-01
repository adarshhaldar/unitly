<?php

namespace Adarsh\Unitly\Convertors;

use Adarsh\Unitly\Convertors\BaseConvertor;

class TimeConvertor extends BaseConvertor
{
    public function __construct()
    {
        parent::__construct(require 'src/Data/TimeConversionData.php');
    }

    public function nanosecond($nanosecond = null)
    {
        $this->handleConversion('nanosecond', $nanosecond);
        return $this;
    }

    public function microsecond($microsecond = null)
    {
        $this->handleConversion('microsecond', $microsecond);
        return $this;
    }
    
    public function millisecond($millisecond = null)
    {
        $this->handleConversion('millisecond', $millisecond);
        return $this;
    }

    public function second($second = null)
    {
        $this->handleConversion('second', $second);
        return $this;
    }

    public function minute($minute = null)
    {
        $this->handleConversion('minute', $minute);
        return $this;
    }

    public function hour($hour = null)
    {
        $this->handleConversion('hour', $hour);
        return $this;
    }

    public function day($day = null)
    {
        $this->handleConversion('day', $day);
        return $this;
    }

    public function week($week = null)
    {
        $this->handleConversion('week', $week);
        return $this;
    }

    public function month($month = null)
    {
        $this->handleConversion('month', $month);
        return $this;
    }

    public function year($year = null)
    {
        $this->handleConversion('year', $year);
        return $this;
    }

    public function decade($decade = null)
    {
        $this->handleConversion('decade', $decade);
        return $this;
    }

    public function century($century = null)
    {
        $this->handleConversion('century', $century);
        return $this;
    }
}
