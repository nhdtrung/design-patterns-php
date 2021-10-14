<?php

declare(strict_types=1);

namespace HeadFirst\Strategy;

use HeadFirst\Strategy\FlyBehavior\FlyWithWings;
use HeadFirst\Strategy\QuackBehavior\Quacks;

class MallardDuck extends Duck
{
    protected $flyBehavior;

    protected $quackBehavior;

    public function __construct()
    {
        $this->flyBehavior = new FlyWithWings();
        $this->quackBehavior = new Quacks();
    }

    public function display()
    {
        echo "I'm Mallard Duck" . PHP_EOL;
    }

    public function performFly()
    {
        echo $this->flyBehavior->fly();
    }

    public function performQuack()
    {
        echo $this->quackBehavior->quack();
    }
}
