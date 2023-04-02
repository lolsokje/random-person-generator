<?php

use LilPecky\DriverGenerator\Factory;

it('generates a random date between two DateTimeImmutable bounds', function () {
    $generator = Factory::create();

    $endDate = new DateTimeImmutable();
    $startDate = $endDate->sub(new DateInterval('P10Y'));

    $date = $generator->dateBetween($startDate, $endDate);

    $this->assertInstanceOf(DateTimeImmutable::class, $date);
    $this->assertGreaterThan($startDate, $date);
    $this->assertLessThan($endDate, $date);
});

it('generates a random date between two string bounds', function () {
    $generator = Factory::create();

    $endDate = '2023-01-01';
    $startDate = '2013-01-01';

    $date = $generator->dateBetween($startDate, $endDate);

    $this->assertInstanceOf(DateTimeImmutable::class, $date);
    $this->assertGreaterThan($startDate, $date->format('Y-m-d'));
    $this->assertLessThan($endDate, $date->format('Y-m-d'));
});

it('generates a random date between now and 30 years ago if no bounds are provided', function () {
    $generator = Factory::create();

    $date = $generator->dateBetween();

    $now = new DateTimeImmutable();

    $this->assertInstanceOf(DateTimeImmutable::class, $date);
    $this->assertGreaterThan($now->sub(new DateInterval('P30Y'))->format('Y-m-d'), $date->format('Y-m-d'));
    $this->assertLessThan($now->format('Y-m-d'), $date->format('Y-m-d'));
});

it('takes the most recent date as end date if provided as start date', function () {
    $generator = Factory::create();

    $startDate = '2013-01-01';
    $endDate = '2023-01-01';

    $date = $generator->dateBetween($endDate, $startDate);

    $this->assertInstanceOf(DateTimeImmutable::class, $date);
    $this->assertGreaterThan($startDate, $date->format('Y-m-d'));
    $this->assertLessThan($endDate, $date->format('Y-m-d'));
});