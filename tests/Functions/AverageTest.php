<?php

use Math\Statistiques\Functions\Average;

test('test moyen', function () {
    $list = [10, 15, 14, 16, 20];

    expect(Average::calculate($list))->toBe(15.0);
});
test('test moyen avec des nombres négatifs', function () {
    $list = [-5, -10, -15, -20];
    expect(Average::calculate($list))->toBe(-12.5);
});

