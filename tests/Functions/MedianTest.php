<?php
use Math\Statistiques\Functions\Median;

test('test médiane avec un nombre impair d\'éléments', function () {
    $list = [10, 15, 14, 16, 20];

    expect(Median::calculate($list))->toBe(15.0);
});

test('test médiane avec un nombre pair d\'éléments', function () {
    $list = [10, 15, 14, 16, 20, 22];

    expect(Median::calculate($list))->toBe(15.5);
});