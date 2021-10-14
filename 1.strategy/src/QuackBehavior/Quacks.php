<?php

declare(strict_types=1);

namespace HeadFirst\Strategy\QuackBehavior;

class Quacks implements QuackBehaviorInterface
{
    public function quack()
    {
        echo "quack quack quack !!!" . PHP_EOL;
    }
}
