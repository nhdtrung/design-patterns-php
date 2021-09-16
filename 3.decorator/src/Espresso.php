<?php

namespace HeadFirst\Decorator;

class Espresso extends Beverage
{
    protected int $price = 20;

    public function cost(): float
    {
        return $this->price;
    }
}
