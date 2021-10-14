<?php

declare(strict_types=1);

namespace HeadFirst\Decorator;

abstract class Beverage
{
    abstract public function cost(): float;
}
