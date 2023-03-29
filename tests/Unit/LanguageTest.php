<?php

use LilPecky\DriverGenerator\Exceptions\InvalidLanguageException;
use LilPecky\DriverGenerator\Languages;

it('throws an exception if an invalid language is provided', function () {
    Languages::parseLanguage('invalid');
})->throws(InvalidLanguageException::class, "The language [invalid] is invalid");

it('parses the provided language code and returns a language name', function (
    string $languageCode,
    string $expectedLanguage,
) {
    $this->assertEquals($expectedLanguage, Languages::parseLanguage($languageCode));
})->with([
    ['en', 'English'],
    ['nl', 'Dutch'],
    ['ja', 'Japanese'],
]);

it('returns all languages', function () {
    $this->assertIsArray(Languages::getLanguages());
});

it('throws an exception when getting all country codes for an invalid language', function () {
    Languages::getCountryCodes('invalid');
})->throws(InvalidLanguageException::class, "The language [invalid] is invalid");

it('returns all country codes for a language', function () {
    $this->assertEquals(['BE', 'NL'], Languages::getCountryCodes('nl'));
    $this->assertEquals(['AU', 'CA', 'GB', 'NZ', 'US'], Languages::getCountryCodes('en'));
    $this->assertEquals(['CN', 'TW'], Languages::getCountryCodes('zh'));
});
