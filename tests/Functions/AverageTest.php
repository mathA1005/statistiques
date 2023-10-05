<?php

use math\Statistiques\Functions\Average;

test('test moyen', function () {
    $list = [10, 15, 14, 16, 20];

    expect(Average::calculate($list))->toBe(15.0);
});
test('test moyen avec des nombres négatifs', function () {
    $list = [-5, -10, -15, -20];
    expect(Average::calculate($list))->toBe(-12.5);
});

test('test moyen avec un tableau vide', function () {
    $list = [];
    expect(Average::calculate($list))->toBe(0.0);
});

test('test moyen avec un seul élément', function () {
    $list = [42];
    expect(Average::calculate($list))->toBe(42.0);
});

test('test moyen avec des nombres décimaux', function () {
    $list = [2.5, 3.5, 4.5];
    expect(Average::calculate($list))->toBe(3.5);
});
