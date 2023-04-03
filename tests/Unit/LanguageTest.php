<?php

use LilPecky\RandomPersonGenerator\Exceptions\InvalidLanguageException;
use LilPecky\RandomPersonGenerator\Languages;

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
    $this->assertEquals(['AU', 'CA', 'GB', 'US'], Languages::getCountryCodes('en'));
    $this->assertEquals(['CN', 'TW'], Languages::getCountryCodes('zh'));
});

it('returns all available language and country combinations as locales', function () {
    $locales = Languages::getAvailableLocales();

    $testLocales = [
        'ar_EG',
        'ar_JO',
        'da_DK',
        'de_CH',
        'de_DE',
        'en_CA',
        'en_GB',
        'en_US',
        'fr_BE',
        'fr_FR',
        'nl_BE',
        'nl_NL',
        'pt_BR',
        'pt_PT',
        'uk_UA',
        'vi_VN',
    ];

    $this->assertIsArray($locales);

    foreach ($testLocales as $locale) {
        $this->assertContains($locale, $locales);
    }
});
