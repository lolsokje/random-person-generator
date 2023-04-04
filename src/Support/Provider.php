<?php

namespace LilPecky\RandomPersonGenerator\Support;

use LilPecky\RandomPersonGenerator\Locale;

class Provider
{
    public static function getProviderClassname(string $provider, Locale $locale): string
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

        $fullProviderClassname = "LilPecky\\RandomPersonGenerator\\$providerClassname";

        return class_exists($fullProviderClassname) ? $fullProviderClassname : null;
    }
}
