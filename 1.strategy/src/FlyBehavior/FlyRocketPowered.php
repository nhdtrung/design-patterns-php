<?php

declare(strict_types=1);

namespace HeadFirst\Strategy\FlyBehavior;

class FlyRocketPowered implements FlyBehaviorInterface
{
    public function fly()
    {
        echo 'Flyyyyyyyyyy by rocket!!!' . PHP_EOL;
    }
}
