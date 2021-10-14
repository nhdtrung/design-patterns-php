<?php

declare(strict_types=1);

namespace HeadFirst\Strategy\QuackBehavior;

class Squeak implements QuackBehaviorInterface
{
    public function quack()
    {
        echo "Queak !!!" . PHP_EOL;
    }
}
