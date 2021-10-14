<?php

declare(strict_types=1);

namespace HeadFirst\Decorator;

class Mocha extends Decorator
{
    protected $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function cost(): float
    {
        return $this->beverage->cost() + 7;
    }
}
