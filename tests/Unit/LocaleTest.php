<?php

use LilPecky\RandomPersonGenerator\Exceptions\InvalidLocaleException;
use LilPecky\RandomPersonGenerator\Locale;

it('throws an exception if a provided locale does not follow the required format', function () {
    Locale::create('invalid');
})->throws(InvalidLocaleException::class, "Locale [invalid] doesn't follow the required format");

it('throws an exception if a provided locale does not exist in the dataset', function () {
    Locale::create('aa_AA');
})->throws(InvalidLocaleException::class, "No data exists for [aa_AA]");

it('can load available locales', function (string $localeString) {
    $locale = Locale::create($localeString);

    $this->assertEquals($localeString, $locale);
})->with('locales');

it('parses the country code and language from locales', function () {
    $locale = Locale::create('en_GB');

    $this->assertEquals('GB', $locale->country());
    $this->assertEquals('English', $locale->language());
});
