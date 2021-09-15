<?php

namespace HeadFirst\Decorator;

class Expresso extends Beverage
{
    public function display(): string
    {
        return 'Dask roast costextends Beverage 10$ ' . PHP_EOL;
    }

    public function cost(): float
    {
        return 10;
    }
}

