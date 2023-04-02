<?php

namespace LilPecky\DriverGenerator;

class Factory
{
    private const DEFAULT_LOCALE = 'en_GB';

    private static array $defaultProviders = ['Date', 'Name'];


    public static function create(
        ?Locale $locale = null,
    ): Generator
    {
        if (!$locale) {
            $locale = Locale::create(self::DEFAULT_LOCALE);
        }

        $generator = new Generator;

        foreach (self::$defaultProviders as $provider) {
            $className = self::getProviderClassname($provider, $locale);
            $generator->addProvider(new $className);
        }

        return $generator;
    }

    private static function getProviderClassname(string $provider, Locale $locale): string
    {
        if ($providerClassname = self::buildProviderClassname($provider, $locale)) {
            return $providerClassname;
        }

        return self::buildProviderClassname($provider);
    }

    private static function buildProviderClassname(string $provider, ?Locale $locale = null): ?string
    {
        if ($locale) {
            $providerClassname = "Providers\\$locale\\$provider";
        } else {
            $providerClassname = "Providers\\$provider";
        }

        $fullProviderClassname = "LilPecky\\DriverGenerator\\$providerClassname";

        return class_exists($fullProviderClassname) ? $fullProviderClassname : null;
    }
}
