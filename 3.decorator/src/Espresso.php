<?php

declare(strict_types=1);

namespace HeadFirst\Decorator;

class Espresso extends Beverage
{
    protected $price = 20;

    public function cost(): float
    {
        return $this->price;
    }
}
