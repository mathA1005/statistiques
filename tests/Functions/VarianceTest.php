<?php
use Math\Statistiques\Functions\Variance;

test('test variance avec des nombres positifs', function () {
    $list = [10, 15, 14, 16, 20];

    // Vous pouvez définir la valeur attendue de la variance en fonction de vos données
    // Assurez-vous de calculer la valeur attendue avec précision à l'avance
    $expectedVariance = 10.4;

    expect(Variance::calculate($list))->toBe($expectedVariance);
});

test('test variance avec des nombres négatifs', function () {
    $list = [-5, -10, -15, -20];

    // Vous pouvez définir la valeur attendue de la variance en fonction de vos données
    // Assurez-vous de calculer la valeur attendue avec précision à l'avance
    $expectedVariance = 31.25;

    expect(Variance::calculate($list))->toBe($expectedVariance);
});
