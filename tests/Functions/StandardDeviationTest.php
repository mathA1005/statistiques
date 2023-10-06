<?php
use Math\Statistiques\Functions\StandardDeviation;



test('test écart-type avec des nombres positifs', function () {
    $list = [10, 15, 14, 16, 20];

    // Vous pouvez définir la valeur attendue de l'écart-type en fonction de vos données
    // Assurez-vous de calculer la valeur attendue avec précision à l'avance
    $expectedStandardDeviation = 3.22490309931942;

    expect(StandardDeviation::calculate($list))->toBe($expectedStandardDeviation);
});
