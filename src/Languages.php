<?php

namespace LilPecky\DriverGenerator;

use LilPecky\DriverGenerator\Exceptions\InvalidLanguageException;

class Languages
{
    private const COUNTRY_CODES = [
        'ar' => ['EG', 'JO', 'SA'],
        'bg' => ['BG'],
        'cs' => ['CZ'],
        'da' => ['DK'],
        'de' => ['AT', 'CH', 'DE'],
        'el' => ['CY', 'GR'],
        'en' => ['AU', 'CA', 'GB', 'US'],
        'es' => ['AR', 'ES', 'PE', 'VE'],
        'et' => ['EE'],
        'fa' => ['IR'],
        'fi' => ['FI'],
        'fr' => ['BE', 'CA', 'CH', 'FR'],
        'he' => ['IL'],
        'hr' => ['HR'],
        'hu' => ['HU'],
        'hy' => ['AM'],
        'id' => ['ID'],
        'is' => ['IS'],
        'it' => ['IT'],
        'ja' => ['JP'],
        'ka' => ['GE'],
        'kk' => ['KZ'],
        'ko' => ['KR'],
        'lt' => ['LT'],
        'lv' => ['LV'],
        'mn' => ['MN'],
        'ms' => ['MY'],
        'nb' => ['NO'],
        'ne' => ['NP'],
        'nl' => ['BE', 'NL'],
        'pl' => ['PL'],
        'pt' => ['BR', 'PT'],
        'ro' => ['MD', 'RO'],
        'ru' => ['RU'],
        'sk' => ['SK'],
        'sl' => ['SI'],
        'sr' => ['RS'],
        'sv' => ['SE'],
        'th' => ['TH'],
        'tr' => ['TR'],
        'uk' => ['UA'],
        'vi' => ['VN'],
        'zh' => ['CN', 'TW'],
    ];

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

    public static function getLanguages(): array
    {
        return self::LANGUAGES;
    }

    public static function getAvailableLocales(): array
    {
        $locales = [];

        foreach (self::COUNTRY_CODES as $language => $countries) {
            foreach ($countries as $country) {
                $locales[] = "{$language}_$country";
            }
        }

        return $locales;
    }

    public static function getCountryCodes(string $language): array
    {
        if (! array_key_exists($language, self::COUNTRY_CODES)) {
            throw new InvalidLanguageException("The language [$language] is invalid");
        }

        return self::COUNTRY_CODES[$language];
    }

    public static function parseLanguage(string $language): string
    {
        if (! array_key_exists($language, self::LANGUAGES)) {
            throw new InvalidLanguageException("The language [$language] is invalid");
        }

        return self::LANGUAGES[$language];
    }
}
