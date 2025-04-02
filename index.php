<?php

require_once './vendor/autoload.php';

use Unitly\Convertors\TimeConvertor;
use Unitly\Unitly;

try {
    $unitly = new Unitly();
    $unitlyTimeConvertor = $unitly->time();
    echo $unitlyTimeConvertor->second(60)->minute()->unify();
    echo "\n";

    $unitlyTimeConvertor = Unitly::time();
    echo $unitlyTimeConvertor->day(1)->hour()->unify();
    echo "\n";

    $unitlyTimeConvertor = new TimeConvertor();
    echo $unitlyTimeConvertor->month(24)->year()->unify();
    echo "\n";

    $unitlyWeightConvertor = $unitly->weight();
    $firstRound = $unitlyWeightConvertor->gram(10000)->kilogram();
    echo "Grams to kilograms: " . $firstRound->unify();
    echo "\n";
    $secondRound = $firstRound->tonne();
    echo "Kilograms to tonnes: " . $secondRound->unify();
} catch (Exception $e) {
    echo $e->getMessage();
}
