<?php

use LilPecky\RandomPersonGenerator\Factory;
use LilPecky\RandomPersonGenerator\Generator;
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
