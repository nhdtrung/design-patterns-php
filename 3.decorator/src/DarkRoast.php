<?php

namespace HeadFirst\Decorator;

abstract class DaskRoast extends Beverage
{
    public function display(): string
    {
        return 'Dask roast cost 10$ ' . PHP_EOL;
    }

    public function cost(): float
    {
        return 10;
    }
}
