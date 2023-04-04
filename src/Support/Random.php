<?php

namespace LilPecky\RandomPersonGenerator\Support;

class Random
{
    public static function element(?array $array = [])
    {
        return $array[array_rand($array)];
    }

    public static function number(int $min, int $max): int
    {
        $minimum = min($min, $max);
        $maximum = max($min, $max);

        return mt_rand($minimum, $maximum);
    }
}
