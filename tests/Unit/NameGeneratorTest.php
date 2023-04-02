<?php

use LilPecky\DriverGenerator\Factory;
use LilPecky\DriverGenerator\Languages;
use LilPecky\DriverGenerator\Locale;
use LilPecky\DriverGenerator\Providers\Name;
use LilPecky\DriverGenerator\Support\Gender;

it('generates a male given name from a given locale', function (string $localeString) {
    $locale = Locale::create($localeString);
    $provider = getNameProvider($localeString);

    $generator = Factory::create($locale);

    $name = $generator->givenName();

    $this->assertIsString($name);
    $this->assertContains($name, $provider::$givenNamesMale);
})->with('locales');

it('generates a female given name for a given locale', function (string $localeString) {
    $locale = Locale::create($localeString);
    $provider = getNameProvider($localeString);

    $generator = Factory::create($locale);

    $name = $generator->givenName(Gender::FEMALE);

    $this->assertIsString($name);
    $this->assertContains($name, $provider::$givenNamesFemale);
})->with('locales');

it('generates given names for a given locale', function (string $localeString) {
    $locale = Locale::create($localeString);
    $provider = getNameProvider($localeString);

    $generator = Factory::create($locale);

    $name = $generator->familyName();

    $this->assertIsString($name);
    $this->assertContains($name, $provider::$familyNames);
})->with(fn() => array_filter(Languages::getAvailableLocales(), fn(string $locale) => $locale !== 'is_IS'));

it('generates gender based family names for locales with gendered family names', function (string $localeString) {
    $locale = Locale::create($localeString);
    $provider = getNameProvider($localeString);

    $generator = Factory::create($locale);

    $name = $generator->familyName(Gender::MALE);

    $this->assertIsString($name);
    $this->assertContains($name, $provider::$familyNamesMale);
})->with([
    'cs_CZ',
    'id_ID',
    'lt_LT',
    'pl_PL',
    'sk_SK',
]);

it('generates Icelandic male last names', function () {
    $locale = Locale::create('is_IS');

    $generator = Factory::create($locale);

    $name = $generator->familyName();

    $this->assertStringEndsWith('sson', $name);
    $this->assertStringEndsNotWith('ursson', $name);
});

it('generates Icelandic female last names', function () {
    $locale = Locale::create('is_IS');

    $generator = Factory::create($locale);

    $name = $generator->familyName(Gender::FEMALE);

    $this->assertStringEndsWith('sdóttir', $name);
    $this->assertStringEndsNotWith('ursdóttir', $name);
});

function getNameProvider(string $localeString): Name
{
    $providerPath = "LilPecky\\DriverGenerator\\Providers\\$localeString\\Name";
    return new $providerPath;
}
