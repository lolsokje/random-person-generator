<?php

use LilPecky\RandomPersonGenerator\Support\Random;

it('picks a random element from an array', function () {
    $data = [1, 2, 3, 4];

    $value = Random::element($data);

    $this->assertContains($value, $data);
});

it('picks a random number between two bounds', function () {
    $min = 0;
    $max = 10;

    $value = Random::number($min, $max);

    $this->assertGreaterThanOrEqual($min, $value);
    $this->assertLessThanOrEqual($max, $value);
});

it('takes the highest value as maximum even if provided as minimum', function () {
    $min = 0;
    $max = 10;

    $value = Random::number($max, $min);

    $this->assertGreaterThanOrEqual($min, $value);
    $this->assertLessThanOrEqual($max, $value);
});
