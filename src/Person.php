<?php

namespace LilPecky\RandomPersonGenerator;

use DateTimeImmutable;
use JsonSerializable;

readonly class Person implements JsonSerializable
{
    public function __construct(
        public string $country,
        public DateTimeImmutable $dob,
        public string $firstName,
        public string $lastName,
    ) {
    }

    public function jsonSerialize(): array
    {
        return [
            'country' => $this->country,
            'dob' => $this->dob->format('Y-m-d'),
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
        ];
    }
}
