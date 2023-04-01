<?php

use LilPecky\DriverGenerator\Factory;
use LilPecky\DriverGenerator\Generator;
use LilPecky\DriverGenerator\Locale;
use LilPecky\DriverGenerator\Providers\Date;
use LilPecky\DriverGenerator\Providers\en_GB\Name;

it('can create a new generator for a given locale', function (string $localeString) {
    $locale = Locale::create($localeString);

    $generator = Factory::create($locale);

    $this->assertInstanceOf(Generator::class, $generator);
})->with('locales');

it('uses the default locale when no locale is provided', function () {
    $generator = Factory::create();

    $providers = $generator->getProviders();

    $this->assertInstanceOf(Name::class, $providers[1]);
});

it('adds the correct providers', function (string $localeString) {
    $locale = Locale::create($localeString);
    $generator = Factory::create($locale);

    $providers = $generator->getProviders();

    $this->assertIsArray($providers);
    $this->assertInstanceOf(Date::class, $providers[0]);
    $this->assertInstanceOf("LilPecky\\DriverGenerator\\Providers\\$locale\\Name", $providers[1]);
})->with('locales');
