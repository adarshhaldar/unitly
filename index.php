<?php

require_once './vendor/autoload.php';

use Adarsh\Unitly\Unitly;

try {
    $unitly = new Unitly();
    $timeUnitly = $unitly->unifyTime();
    $weightUnitly = $unitly->unifyWeight();
    echo $timeUnitly->nanosecond(1)->century()->unify(1)."\n";
    echo $weightUnitly->gram(1001)->kilogram()->unify(2.2);

} catch (Exception $e) {
    echo $e->getMessage();
}
