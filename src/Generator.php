<?php

namespace LilPecky\RandomPersonGenerator;

use DateTimeImmutable;
use LilPecky\RandomPersonGenerator\Contracts\Provider;
use LilPecky\RandomPersonGenerator\Support\Gender;

/**
 * @method DateTimeImmutable dateBetween(DateTimeImmutable|string|null $startDate = '-30 years', DateTimeImmutable|string|null $endDate = 'now')
 *
 * @method string givenName(?Gender $gender = Gender::MALE)
 *
 * @method string familyName(?Gender $gender = null)
 */
class Generator
{
    private array $providers = [];
    private array $methods = [];

    public function __construct(
        private Locale $locale,
    ) {
    }

    public function addProvider(string $tag, Provider $provider): void
    {
        $this->providers[$tag] = $provider;
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

    /**
     * @return Person[]
     */
    public function people(
        Amount $amount,
        DateTimeImmutable|string|null $startDate,
        DateTimeImmutable|string|null $endDate,
        ?Gender $gender = null,
        ?bool $randomiseCountryForEachPerson = true,
    ): array {
        $persons = [];

        for ($i = 0; $i < $amount->value; $i++) {
            $persons[] = $this->person(
                startDate: $startDate,
                endDate: $endDate,
                gender: $gender,
            );

            if ($randomiseCountryForEachPerson) {
                $this->setNewLocale();
            }
        }

        return $persons;
    }

    /**
     * @return Person[]
     */
    public function persons(
        Amount $amount,
        DateTimeImmutable|string|null $startDate,
        DateTimeImmutable|string|null $endDate,
        ?Gender $gender = null,
        ?bool $randomiseCountryForEachPerson = true,
    ): array {
        return $this->people(
            amount: $amount,
            startDate: $startDate,
            endDate: $endDate,
            gender: $gender,
            randomiseCountryForEachPerson: $randomiseCountryForEachPerson,
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

    private function setNewLocale(): void
    {
        $this->locale = Locale::randomForLanguage($this->locale->languageCode());

        $className = Support\Provider::getProviderClassname('name', $this->locale);
        $this->addProvider('name', new $className);
    }
}
