<?php

namespace LilPecky\RandomPersonGenerator\Providers;

use LilPecky\RandomPersonGenerator\Contracts\Provider;
use LilPecky\RandomPersonGenerator\Support\Gender;
use LilPecky\RandomPersonGenerator\Support\Random;

class Name implements Provider
{
    public static array $givenNamesMale = [
        'John',
    ];

    public static array $givenNamesFemale = [
        'Jane',
    ];

    public static array $familyNames = [
        'Doe',
    ];

    public function givenName(?Gender $gender = Gender::MALE): string
    {
        $names = $gender === Gender::MALE ? static::$givenNamesMale : static::$givenNamesFemale;

        return Random::element($names);
    }

    public function familyName(?Gender $gender = null): string
    {
        if (! $gender) {
            return Random::element(static::$familyNames);
        }

        if (! property_exists($this, 'familyNamesMale')) {
            return Random::element(static::$familyNames);
        }

        $names = $gender === Gender::MALE ? static::$familyNamesMale : static::$familyNamesFemale;

        return Random::element($names);
    }
}
