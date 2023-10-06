<?php
namespace Math\Statistiques\Functions;
class Median {
    public static function calculate($numbers) {
        sort($numbers);
        $count = count($numbers);

        if ($count % 2 === 0) {
            // Nombre pair d'éléments, moyenne des deux éléments du milieu
            $middle1 = $numbers[($count / 2) - 1];
            $middle2 = $numbers[$count / 2];
            $median = ($middle1 + $middle2) / 2.0; // Utilisation de 2.0 pour forcer le résultat en float
        } else {
            // Nombre impair d'éléments, élément du milieu
            $median = $numbers[($count - 1) / 2];
        }

        return (float) $median; // Assurez-vous que le résultat est un float
    }
}
