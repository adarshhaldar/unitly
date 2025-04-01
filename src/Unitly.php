<?php

namespace Adarsh\Unitly;

use Adarsh\Unitly\Convertors\TimeConvertor;
use Adarsh\Unitly\Convertors\WeightConvertor;

class Unitly
{
    public function unifyTime()
    {
        return new TimeConvertor();
    }

    public static function time()
    {
        return new TimeConvertor();
    }

    public function unifyWeight()
    {
        return new WeightConvertor();
    }

    public static function weight()
    {
        return new WeightConvertor();
    }
}
