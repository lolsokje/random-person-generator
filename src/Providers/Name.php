<?php

namespace LilPecky\DriverGenerator\Providers;

use LilPecky\DriverGenerator\Contracts\Provider;

abstract class Name implements Provider
{
    protected static array $namesMale = [
        'John',
    ];

    protected static array $namesFemale = [
        'Jane',
    ];

    protected static array $lastNames = [
        'Doe',
    ];
}
