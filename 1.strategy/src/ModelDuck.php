<?php

declare(strict_types=1);

namespace HeadFirst\Strategy;

use HeadFirst\Strategy\FlyBehavior\FlyNoWay;
use HeadFirst\Strategy\QuackBehavior\Quacks;

class ModelDuck extends Duck
{
    protected $flyBehavior;

    protected $quackBehavior;

    public function __construct()
    {
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new Quacks();
    }

    public function display()
    {
        echo "I'm Model Duck" . PHP_EOL;
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
