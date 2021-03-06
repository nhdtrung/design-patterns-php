<?php

namespace HeadFirst\Decorator;

class DarkRoast extends Beverage
{
    protected int $price = 10;

    public function cost(): float
    {
        return $this->price;
    }
}
