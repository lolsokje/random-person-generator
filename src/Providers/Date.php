<?php

namespace LilPecky\RandomPersonGenerator\Providers;

use DateTimeImmutable;
use LilPecky\RandomPersonGenerator\Contracts\Provider;
use LilPecky\RandomPersonGenerator\Support\Random;

class Date implements Provider
{
    public function dateBetween(
        DateTimeImmutable|string|null $startDate = '-30 years',
        DateTimeImmutable|string|null $endDate = 'now',
    ): DateTimeImmutable {
        $startTimestamp = $startDate instanceof DateTimeImmutable ? $startDate->getTimestamp() : strtotime($startDate);
        $endTimeStamp = $endDate instanceof DateTimeImmutable ? $endDate->getTimestamp() : strtotime($endDate);

        return (new DateTimeImmutable)->setTimestamp(Random::number($startTimestamp, $endTimeStamp));
    }
}
