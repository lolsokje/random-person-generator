<?php

use LilPecky\RandomPersonGenerator\Factory;
use LilPecky\RandomPersonGenerator\Languages;
use LilPecky\RandomPersonGenerator\Locale;
use LilPecky\RandomPersonGenerator\Providers\Name;
use LilPecky\RandomPersonGenerator\Support\Gender;

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
})->with(fn () => array_filter(Languages::getAvailableLocales(), fn (string $locale) => $locale !== 'is_IS'));

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

it('does not generated gendered family names if no gendered family names exist', function () {
    $locale = Locale::create('en_GB');
    $provider = new \LilPecky\RandomPersonGenerator\Providers\en_GB\Name;

    $generator = Factory::create($locale);

    $name = $generator->familyName(Gender::MALE);

    $this->assertIsString($name);
    $this->assertContains($name, $provider::$familyNames);
});

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

it('does not include "ur" in Icelandic last names', function () {
    $locale = Locale::create('is_IS');
    \LilPecky\RandomPersonGenerator\Providers\is_IS\Name::$givenNamesMale = ['Testur'];

    $generator = Factory::create($locale);

    $name = $generator->familyName();

    $this->assertEquals('Testsson', $name);
});

function getNameProvider(string $localeString): Name
{
    $providerPath = "LilPecky\\RandomPersonGenerator\\Providers\\$localeString\\Name";

    return new $providerPath;
}
