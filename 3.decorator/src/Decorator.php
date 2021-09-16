<?php

namespace HeadFirst\Decorator;

abstract class Decorator extends Beverage
{
    protected Beverage $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    abstract function cost(): float;
}
