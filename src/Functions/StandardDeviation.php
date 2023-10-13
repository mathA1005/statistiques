<?php
namespace Math\Statistiques\Functions;
class  StandardDeviation {
    public static function calculate(array $numbers): float
    {
        $average = Average::calculate($numbers);

        $sumOfSquaredDifferences = 0;
        foreach ($numbers as $number) {
            $difference = $number - $average;
            $sumOfSquaredDifferences += $difference * $difference;
        }

        $variance = $sumOfSquaredDifferences / count($numbers);

        $standardDeviation = sqrt($variance);

        return $standardDeviation;
    }
}