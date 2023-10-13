<?php

namespace Math\Statistiques\Functions;
class  Variance

{
    public static function calculate(array $numbers): float
    {
        $average = Average::calculate($numbers);

        $sumOfSquaredDifferences = 0;
        foreach ($numbers as $number) {
            $difference = $number - $average;
            $sumOfSquaredDifferences += $difference * $difference;
        }

        $variance = $sumOfSquaredDifferences / count($numbers);

        return $variance;
    }
}