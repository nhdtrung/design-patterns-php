<?php

declare(strict_types=1);

namespace HeadFirst\Strategy\QuackBehavior;

class MuteQuack implements QuackBehaviorInterface
{
    public function quack()
    {
        echo "I can't quack" . PHP_EOL;
    }
}
