<?php

declare(strict_types=1);

namespace HeadFirst\Decorator;

class DarkRoast extends Beverage
{
    protected $price = 10;

    public function cost(): float
    {
        return $this->price;
    }
}
