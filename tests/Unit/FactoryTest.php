<?php

use LilPecky\RandomPersonGenerator\Factory;
use LilPecky\RandomPersonGenerator\Generator;
use LilPecky\RandomPersonGenerator\Languages;
use LilPecky\RandomPersonGenerator\Locale;
use LilPecky\RandomPersonGenerator\Providers\Date;
use LilPecky\RandomPersonGenerator\Providers\en_GB\Name;

it('can create a new generator for a given locale', function (string $localeString) {
    $locale = Locale::create($localeString);

    $generator = Factory::create($locale);

    $this->assertInstanceOf(Generator::class, $generator);
})->with('locales');

it('uses the default locale when no locale is provided', function () {
    $generator = Factory::create();

    $providers = $generator->getProviders();

    $this->assertInstanceOf(Name::class, $providers['name']);
});

it('adds the correct providers', function (string $localeString) {
    $locale = Locale::create($localeString);
    $generator = Factory::create($locale);

    $providers = $generator->getProviders();

    $this->assertIsArray($providers);
    $this->assertInstanceOf(Date::class, $providers['date']);
    $this->assertInstanceOf("LilPecky\\RandomPersonGenerator\\Providers\\$locale\\Name", $providers['name']);
})->with('locales');

it('can create a new generator with a random locale', function () {
    $generator = Factory::createWithRandomLocale();

    $this->assertInstanceOf(Generator::class, $generator);
});

it('selects a random country if a language is provided', function () {
    $generator = Factory::createWithRandomLocale('nl');

    $reflectionClass = new ReflectionClass($generator);
    $localeProperty = $reflectionClass->getProperty('locale');
    $locale = $localeProperty->getValue($generator);

    $localeReflectionClass = new ReflectionClass($locale);
    $country = $localeReflectionClass->getProperty('country')->getValue($locale);

    $this->assertContains($country, Languages::getCountryCodes('nl'));
});
