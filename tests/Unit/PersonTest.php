<?php

use LilPecky\RandomPersonGenerator\Person;

it('json serialises a person', function () {
    $country = 'NL';
    $firstName = 'Test';
    $lastName = 'Testing';
    $dob = new DateTimeImmutable('2023-01-01');

    $person = new Person(
        country: $country,
        dob: $dob,
        firstName: $firstName,
        lastName: $lastName,
    );

    $actual = json_encode($person);
    $expected = [
        'country' => $country,
        'dob' => $dob->format('Y-m-d'),
        'first_name' => $firstName,
        'last_name' => $lastName,
    ];

    $this->assertEquals(json_encode($expected), $actual);
});
