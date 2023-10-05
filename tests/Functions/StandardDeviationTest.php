<?php
use math\Statistiques\Functions\StandardDeviation;



test('test écart-type avec des nombres positifs', function () {
    $list = [10, 15, 14, 16, 20];

    // Vous pouvez définir la valeur attendue de l'écart-type en fonction de vos données
    // Assurez-vous de calculer la valeur attendue avec précision à l'avance
    $expectedStandardDeviation = 2.8867513459481287;

    expect(StandardDeviation::calculate($list))->toBe($expectedStandardDeviation);
});

test('test écart-type avec des nombres négatifs', function () {
    $list = [-5, -10, -15, -20];

    // Vous pouvez définir la valeur attendue de l'écart-type en fonction de vos données
    // Assurez-vous de calculer la valeur attendue avec précision à l'avance
    $expectedStandardDeviation = 5.0;

    expect(StandardDeviation::calculate($list))->toBe($expectedStandardDeviation);
});

test('test écart-type avec un tableau vide', function () {
    $list = [];

    // L'écart-type d'un tableau vide doit être zéro
    expect(StandardDeviation::calculate($list))->toBe(0.0);
});

test('test écart-type avec un seul élément', function () {
    $list = [42];

    // L'écart-type d'un seul élément est zéro
    expect(StandardDeviation::calculate($list))->toBe(0.0);
});