<?php

namespace Adarsh\Unitly\Convertors;

use Adarsh\Unitly\Convertors\BaseConvertor;

class WeightConvertor extends BaseConvertor
{
    public function __construct()
    {
        parent::__construct(require 'src/Data/WeightConversionData.php');
    }

    public function ounce($ounce = null)
    {
        $this->handleConversion('ounce', $ounce);
        return $this;
    }

    public function pound($pound = null)
    {
        $this->handleConversion('pound', $pound);
        return $this;
    }

    public function stone($stone = null)
    {
        $this->handleConversion('stone', $stone);
        return $this;
    }

    public function uston($uston = null)
    {
        $this->handleConversion('us_ton', $uston);
        return $this;
    }

    public function imperialton($imperialton = null)
    {
        $this->handleConversion('imperial_ton', $imperialton);
        return $this;
    }

    public function microgram($microgram = null)
    {
        $this->handleConversion('microgram', $microgram);
        return $this;
    }

    public function milligram($milligram = null)
    {
        $this->handleConversion('milligram', $milligram);
        return $this;
    }

    public function gram($gram = null)
    {
        $this->handleConversion('gram', $gram);
        return $this;
    }

    public function kilogram($kilogram = null)
    {
        $this->handleConversion('kilogram', $kilogram);
        return $this;
    }

    public function tonne($tonne = null)
    {
        $this->handleConversion('tonne', $tonne);
        return $this;
    }
}
