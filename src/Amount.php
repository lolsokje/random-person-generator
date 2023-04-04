<?php

namespace LilPecky\RandomPersonGenerator;

use InvalidArgumentException;

class Amount
{
    public function __construct(
        public readonly int $value,
    ) {
        if ($this->value < 1) {
            throw new InvalidArgumentException("The value must be one or greater");
        }
    }
}
