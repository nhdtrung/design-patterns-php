<?php

declare(strict_types=1);

namespace HeadFirst\Decorator;

class Milk extends Decorator
{
    protected $beverage;

    protected $price = 5;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function cost(): float
    {
        return $this->beverage->cost() + $this->price;
    }
}
