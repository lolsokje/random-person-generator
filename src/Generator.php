<?php

namespace LilPecky\DriverGenerator;

use DateTimeImmutable;
use LilPecky\DriverGenerator\Contracts\Provider;
use LilPecky\DriverGenerator\Support\Gender;

/**
 * @method dateBetween(DateTimeImmutable|string|null $startDate = '-30 years', DateTimeImmutable|string|null $endDate = 'now'): DateTimeImmutable
 *
 * @method givenName(?Gender $gender = Gender::MALE): string
 *
 * @method familyName(?Gender $gender = null): string
 */
class Generator
{
    private array $providers = [];
    private array $methods = [];

    public function __construct(
        private readonly Locale $locale,
    ) {
    }

    public function addProvider(Provider $provider): void
    {
        $this->providers[] = $provider;
    }

    public function getProviders(): array
    {
        return $this->providers;
    }

    public function person(
        DateTimeImmutable|string|null $startDate,
        DateTimeImmutable|string|null $endDate,
        ?Gender $gender = null,
    ): Person {
        return new Person(
            country: $this->locale->country(),
            dob: $this->dateBetween($startDate, $endDate),
            firstName: $this->givenName($gender),
            lastName: $this->familyName($gender),
        );
    }

    public function __call(string $method, array $arguments)
    {
        return $this->method($method, $arguments);
    }

    private function method(string $method, ?array $arguments = [])
    {
        return call_user_func_array($this->getMethod($method), $arguments);
    }

    private function getMethod(string $method)
    {
        if (isset($this->methods[$method])) {
            return $this->methods[$method];
        }

        foreach ($this->providers as $provider) {
            if (method_exists($provider, $method)) {
                $this->methods[$method] = [$provider, $method];

                return $this->methods[$method];
            }
        }
    }
}
