<?php

namespace LilPecky\DriverGenerator\Support;

class Random
{
    public static function element(?array $array = [])
    {
        return $array[array_rand($array)];
    }
}
