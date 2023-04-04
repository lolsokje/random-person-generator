<?php

use LilPecky\RandomPersonGenerator\Amount;

it('throws an exception when setting a value less than one', function () {
    new Amount(-1);
})->throws(InvalidArgumentException::class);
