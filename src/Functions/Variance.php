<?php

namespace math\Statiques\Functions;
class  Variance

{
    public static function calculate(array $numbers): float
    {
        // Calcule la moyenne des nombres
        $average = \math\Statistiques\Functions\Average\Average::calculate($numbers);

        // Calcule la somme des carrés des écarts à la moyenne
        $sumOfSquaredDifferences = 0;
        foreach ($numbers as $number) {
            $difference = $number - $average;
            $sumOfSquaredDifferences += $difference * $difference;
        }

        // Calcule la variance en divisant la somme des carrés par le nombre d'éléments
        $variance = $sumOfSquaredDifferences / count($numbers);

        return $variance;
    }
}