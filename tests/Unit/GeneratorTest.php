<?php

use LilPecky\DriverGenerator\Factory;
use LilPecky\DriverGenerator\Locale;
use LilPecky\DriverGenerator\Person;
use LilPecky\DriverGenerator\Support\Gender;

it('generates a person for a given locale', function (string $localeString) {
    $locale = Locale::create($localeString);
    $generator = Factory::create($locale);

    $startDate = '2013-01-01';
    $endDate = '2023-01-01';

    $person = $generator->person(
        startDate: $startDate,
        endDate: $endDate,
        gender: Gender::MALE,
    );

    $this->assertInstanceOf(Person::class, $person);
    $this->assertEquals($locale->country(), $person->country);
    $this->assertGreaterThan($startDate, $person->dob->format('Y-m-d'));
    $this->assertLessThan($endDate, $person->dob->format('Y-m-d'));
    $this->assertIsString($person->firstName);
    $this->assertIsString($person->lastName);
})->with('locales');
