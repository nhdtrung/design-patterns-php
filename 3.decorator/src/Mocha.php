<?php

namespace HeadFirst\Decorator;

class Mocha extends Decorator
{
    protected Beverage $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function cost(): float
    {
        return $this->beverage->cost() + 7;
    }
}
