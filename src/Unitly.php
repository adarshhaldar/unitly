<?php

namespace Adarsh\Unitly;

use Adarsh\Unitly\Convertors\PlaneAngleConvertor;
use Adarsh\Unitly\Convertors\TemperatureConvertor;
use Adarsh\Unitly\Convertors\TimeConvertor;
use Adarsh\Unitly\Convertors\WeightConvertor;

/**
 * Unitly Class
 * 
 * The `Unitly` class serves as a central point to access various unit conversion functionalities. 
 * It provides methods to get instances of unit converters for different categories of measurements.
 * 
 * The class provides both instance-based and static
 * methods to access these converters, allowing for flexible usage depending on the context (whether you want to 
 * use the methods in an object-oriented fashion or call them statically).
 */
class Unitly
{
    /**
     * Returns an instance of the TimeConvertor class.
     * 
     * @return TimeConvertor
     */
    public function unifyTime()
    {
        return new TimeConvertor();
    }

    /**
     * Static method to return an instance of the TimeConvertor class.
     * 
     * @return TimeConvertor
     */
    public static function time()
    {
        return new TimeConvertor();
    }

    /**
     * Returns an instance of the WeightConvertor class.
     * 
     * @return WeightConvertor
     */
    public function unifyWeight()
    {
        return new WeightConvertor();
    }

    /**
     * Static method to return an instance of the WeightConvertor class.
     * 
     * @return WeightConvertor
     */
    public static function weight()
    {
        return new WeightConvertor();
    }

    /**
     * Returns an instance of the TemperatureConvertor class.
     * 
     * @return TemperatureConvertor
     */
    public function unifyTemperature()
    {
        return new TemperatureConvertor();
    }

    /**
     * Static method to return an instance of the TemperatureConvertor class.
     * 
     * @return TemperatureConvertor
     */
    public static function temperature()
    {
        return new TemperatureConvertor();
    }

    /**
     * Returns an instance of the PlaneAngleConvertor class.
     * 
     * @return PlaneAngleConvertor
     */
    public function unifyPlaneAngle()
    {
        return new PlaneAngleConvertor();
    }

    /**
     * Static method to return an instance of the PlaneAngleConvertor class.
     * 
     * @return PlaneAngleConvertor
     */
    public static function planeAngle()
    {
        return new PlaneAngleConvertor();
    }
}
