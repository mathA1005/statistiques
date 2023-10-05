<?php
use math\Statistiques\Functions\Variance;

test('test variance avec des nombres positifs', function () {
    $list = [10, 15, 14, 16, 20];

    // Vous pouvez définir la valeur attendue de la variance en fonction de vos données
    // Assurez-vous de calculer la valeur attendue avec précision à l'avance
    $expectedVariance = 7.5;

    expect(Variance::calculate($list))->toBe($expectedVariance);
});

test('test variance avec des nombres négatifs', function () {
    $list = [-5, -10, -15, -20];

    // Vous pouvez définir la valeur attendue de la variance en fonction de vos données
    // Assurez-vous de calculer la valeur attendue avec précision à l'avance
    $expectedVariance = 25.0;

    expect(Variance::calculate($list))->toBe($expectedVariance);
});

test('test variance avec un tableau vide', function () {
    $list = [];

    // La variance d'un tableau vide doit être zéro
    expect(Variance::calculate($list))->toBe(0.0);
});

test('test variance avec un seul élément', function () {
    $list = [42];

    // La variance d'un seul élément est zéro
    expect(Variance::calculate($list))->toBe(0.0);
});

test('test variance avec des nombres décimaux', function () {
    $list = [2.5, 3.5, 4.5];

    // Vous pouvez définir la valeur attendue de la variance en fonction de vos données
    // Assurez-vous de calculer la valeur attendue avec précision à l'avance
    $expectedVariance = 0.33333333333333;

    expect(Variance::calculate($list))->toBe($expectedVariance);
});