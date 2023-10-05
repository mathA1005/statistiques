<?php
namespace math\Statiques\Functions;
class  Median {
    public static function calculate(array $numbers): float
    {
        // Assurez-vous que le tableau est trié pour calculer la médiane
        sort($numbers);
        $count = count($numbers);

        // Si le nombre d'éléments est impair, la médiane est au milieu du tableau
        if ($count % 2 !== 0) {
            $middleIndex = floor($count / 2);
            return $numbers[$middleIndex];
        }

        // Si le nombre d'éléments est pair, la médiane est la moyenne des deux éléments du milieu
        $middleIndex1 = ($count - 1) / 2;
        $middleIndex2 = $middleIndex1 + 1;
        $median = ($numbers[$middleIndex1] + $numbers[$middleIndex2]) / 2.0;

        return $median;
    }

}
