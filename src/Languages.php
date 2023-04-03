<?php

namespace LilPecky\RandomPersonGenerator;

use LilPecky\RandomPersonGenerator\Exceptions\InvalidLanguageException;

class Languages
{
    private const LANGUAGES = [
        'ar' => 'Arabic',
        'bg' => 'Bulgarian',
        'cs' => 'Czech',
        'da' => 'Danish',
        'de' => 'German',
        'el' => 'Greek',
        'en' => 'English',
        'es' => 'Spanish',
        'et' => 'Estonian',
        'fa' => 'Persian',
        'fi' => 'Finnish',
        'fr' => 'French',
        'hr' => 'Croatian',
        'hu' => 'Hungarian',
        'hy' => 'Armenian',
        'id' => 'Indonesian',
        'is' => 'Icelandic',
        'it' => 'Italian',
        'ja' => 'Japanese',
        'ka' => 'Georgian',
        'kk' => 'Kazakh',
        'ko' => 'Korean',
        'lt' => 'Lithuanian',
        'lv' => 'Latvian',
        'mn' => 'Mongolian',
        'ms' => 'Malay',
        'nb' => 'Norwegian',
        'ne' => 'Nepali',
        'nl' => 'Dutch',
        'pl' => 'Polish',
        'pt' => 'Portuguese',
        'ro' => 'Romanian',
        'ru' => 'Russian',
        'sk' => 'Slovak',
        'sl' => 'Slovenian',
        'sr' => 'Serbian',
        'sv' => 'Swedish',
        'th' => 'Thai',
        'tr' => 'Turkish',
        'uk' => 'Ukrainian',
        'vi' => 'Vietnamese',
        'zh' => 'Chinese',
    ];

    private static array $providerLocales = [];

    public static function getLanguages(): array
    {
        return self::LANGUAGES;
    }

    public static function getAvailableLocales(): array
    {
        $locales = [];

        foreach (self::getProviderLocales() as $language => $countries) {
            foreach ($countries as $country) {
                $locales[] = "{$language}_$country";
            }
        }

        return $locales;
    }

    public static function getCountryCodes(string $language): array
    {
        if (! array_key_exists($language, self::getProviderLocales())) {
            throw new InvalidLanguageException("The language [$language] is invalid");
        }

        return self::getProviderLocales()[$language];
    }

    public static function getLanguageName(string $language): string
    {
        if (! array_key_exists($language, self::LANGUAGES)) {
            throw new InvalidLanguageException("The language [$language] is invalid");
        }

        return self::LANGUAGES[$language];
    }

    private static function getProviderLocales(): array
    {
        if (! count(self::$providerLocales)) {
            $directory = __DIR__ . '/Providers/';
            // ab_CD
            $pattern = '/[a-z]{2}_[A-Z]{2}/';
            $folders = array_filter(scandir($directory), fn (string $entry) => preg_match($pattern, $entry));

            foreach ($folders as $folder) {
                [$language, $country] = explode('_', $folder);
                self::$providerLocales[$language][] = $country;
            }
        }

        return self::$providerLocales;
    }
}
