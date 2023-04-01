<?php

namespace LilPecky\DriverGenerator;

use LilPecky\DriverGenerator\Contracts\Provider;

class Generator
{
    private array $providers = [];

    public function addProvider(Provider $provider): void
    {
        $this->providers[] = $provider;
    }

    public function getProviders(): array
    {
        return $this->providers;
    }
}
