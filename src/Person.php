<?php

namespace LilPecky\DriverGenerator;

use DateTimeImmutable;

readonly class Person
{
    public function __construct(
        public string $country,
        public DateTimeImmutable $dob,
        public string $firstName,
        public string $lastName,
    ) {
    }
}
