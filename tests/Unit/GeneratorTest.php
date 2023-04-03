<?php

use LilPecky\RandomPersonGenerator\Factory;
use LilPecky\RandomPersonGenerator\Generator;
use LilPecky\RandomPersonGenerator\Locale;
use LilPecky\RandomPersonGenerator\Person;
use LilPecky\RandomPersonGenerator\Support\Gender;

it('caches previously called methods', function () {
    $generator = Factory::create();

    $reflectionClass = new ReflectionClass(Generator::class);
    $methodsProperty = $reflectionClass->getProperty('methods');

    $this->assertEmpty($methodsProperty->getValue($generator));

    $generator->givenName();

    $this->assertArrayHasKey('givenName', $methodsProperty->getValue($generator));

    $generator->givenName();

    $this->assertArrayHasKey('givenName', $methodsProperty->getValue($generator));
    $this->assertCount(1, $methodsProperty->getValue($generator));
});

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
