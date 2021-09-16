<?php

namespace HeadFirst\Decorator;

class Milk extends Decorator
{
    protected Beverage $beverage;

    protected int $price = 5;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function cost(): float
    {
        return $this->beverage->cost() + $this->price;
    }
}
