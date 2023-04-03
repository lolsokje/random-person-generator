<?php

namespace LilPecky\RandomPersonGenerator;

use LilPecky\RandomPersonGenerator\Exceptions\InvalidLocaleException;
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

    public function country(): string
    {
        return $this->country;
    }

    public function language(): string
    {
        return Languages::parseLanguage($this->language);
    }

    public function __toString(): string
    {
        return "{$this->language}_$this->country";
    }
}
