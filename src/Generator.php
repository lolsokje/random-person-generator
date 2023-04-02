<?php

namespace LilPecky\DriverGenerator;

use DateTimeImmutable;
use LilPecky\DriverGenerator\Contracts\Provider;

/**
 * @method dateBetween(DateTimeImmutable|string|null $startDate = '-30 years', DateTimeImmutable|string|null $endDate = 'now'): DateTimeImmutable
 */
class Generator
{
    private array $providers = [];
    private array $methods = [];

    public function addProvider(Provider $provider): void
    {
        $this->providers[] = $provider;
    }

    public function getProviders(): array
    {
        return $this->providers;
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

        if (method_exists($this, $method)) {
            $this->methods[$method] = [$this, $method];

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
