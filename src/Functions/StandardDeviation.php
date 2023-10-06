<?php
namespace Math\Statistiques\Functions;
class  StandardDeviation {
    public static function calculate(array $numbers): float
    {
        // Calcule la moyenne des nombres
        $average = Average::calculate($numbers);

        // Calcule la somme des carrés des écarts à la moyenne
        $sumOfSquaredDifferences = 0;
        foreach ($numbers as $number) {
            $difference = $number - $average;
            $sumOfSquaredDifferences += $difference * $difference;
        }

        // Calcule la variance
        $variance = $sumOfSquaredDifferences / count($numbers);

        // Calcule l'écart-type en prenant la racine carrée de la variance
        $standardDeviation = sqrt($variance);

        return $standardDeviation;
    }
}