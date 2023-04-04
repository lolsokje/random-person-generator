<?php

namespace LilPecky\RandomPersonGenerator;

use LilPecky\RandomPersonGenerator\Exceptions\InvalidLocaleException;
use LilPecky\RandomPersonGenerator\Support\Random;
use Stringable;

class Locale implements Stringable
{
    private function __construct(
        protected readonly string $language,
        protected readonly string $country,
    ) {
    }

    public static function create(string $locale): Locale
    {
        if (! preg_match('/[a-z]{2}_[A-Z]{2}/', $locale)) {
            throw new InvalidLocaleException("Locale [$locale] doesn't follow the required format");
        }

        if (! file_exists(__DIR__ . "/Providers/$locale")) {
            throw new InvalidLocaleException("No data exists for [$locale]");
        }

        [$language, $country] = explode('_', $locale);

        return new self($language, $country);
    }

    public static function randomForLanguage(
        string $language,
    ): Locale {
        $country = Random::element(Languages::getCountryCodes($language));

        return self::create("{$language}_$country");
    }

    public function country(): string
    {
        return $this->country;
    }

    public function languageName(): string
    {
        return Languages::getLanguageName($this->language);
    }

    public function languageCode(): string
    {
        return $this->language;
    }

    public function __toString(): string
    {
        return "{$this->language}_$this->country";
    }
}
