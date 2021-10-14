<?php

declare(strict_types=1);

namespace HeadFirst\Strategy\FlyBehavior;

class FlyNoWay implements FlyBehaviorInterface
{
    public function fly()
    {
        echo "I can't fly" . PHP_EOL;
    }
}
