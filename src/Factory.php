<?php

namespace LilPecky\RandomPersonGenerator;

use LilPecky\RandomPersonGenerator\Support\Provider;

class Factory
{
    private const DEFAULT_LOCALE = 'en_GB';

    private static array $defaultProviders = ['Date', 'Name'];


    public static function create(
        ?Locale $locale = null,
    ): Generator {
        if (! $locale) {
            $locale = Locale::create(self::DEFAULT_LOCALE);
        }

        $generator = new Generator($locale);

        foreach (self::$defaultProviders as $provider) {
            $className = Provider::getProviderClassname($provider, $locale);
            $generator->addProvider(
                tag: strtolower($provider),
                provider: new $className,
            );
        }

        return $generator;
    }

    public static function createWithRandomLocale(
        ?string $language = null,
    ): Generator {
        if (! $language) {
            $language = Languages::getRandomLanguage();
        }

        $locale = Locale::randomForLanguage($language);

        $generator = new Generator($locale);

        foreach (self::$defaultProviders as $provider) {
            $className = Provider::getProviderClassname($provider, $locale);
            $generator->addProvider(
                tag: strtolower($provider),
                provider: new $className,
            );
        }

        return $generator;
    }
}
