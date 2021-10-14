<?php

declare(strict_types=1);

namespace HeadFirst\Decorator;

abstract class Decorator extends Beverage
{
    protected $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    abstract public function cost(): float;
}
