<?php
namespace Math\Statistiques\Functions;
class Median {
    public static function calculate($numbers) {
        sort($numbers);
        $count = count($numbers);

        if ($count % 2 === 0) {
            $middle1 = $numbers[($count / 2) - 1];
            $middle2 = $numbers[$count / 2];
            $median = ($middle1 + $middle2) / 2.0;
        } else {
            $median = $numbers[($count - 1) / 2];
        }

        return (float) $median;
    }
}

$ananas = [1, 5, 6, 7];
$medianValue = Median::calculate($ananas);
echo $medianValue;
