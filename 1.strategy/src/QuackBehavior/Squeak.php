<?php

namespace HeadFirst\Strategy\QuackBehavior;

class Squeak implements QuackBehaviorInterface
{
    public function quack()
    {
        echo "Queak !!!" . PHP_EOL;
    }
}

