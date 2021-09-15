<?php

namespace HeadFirst\Decorator;

abstract class Beverage 
{
    public function display(): string
    {
        return 'This is Beverage' . PHP_EOL;
    }

    abstract function cost(): float;
}

