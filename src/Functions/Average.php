<?php

namespace math\Statistiques\Functions\Average;
class Average
{
    public static function calculate(array $numbers): float
    {
        $sum = array_sum($numbers);
        $count = count($numbers);

        return $sum / $count;
    }
}
