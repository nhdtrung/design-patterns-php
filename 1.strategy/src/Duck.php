<?php

declare(strict_types=1);

namespace HeadFirst\Strategy;

use HeadFirst\Strategy\FlyBehavior\FlyBehaviorInterface;
use HeadFirst\Strategy\QuackBehavior\QuackBehaviorInterface;

abstract class Duck
{
    protected $flyBehavior;
    protected $quackBehavior;

    // Display is abstraction cause all ducks will have different display
    abstract public function display();

    public function performFly()
    {
        $this->flyBehavior->fly();
    }

    public function performQuack()
    {
        $this->quackBehavior->quack();
    }

    public function setFlyBehavior(FlyBehaviorInterface $flyBehaviorInterface)
    {
        $this->flyBehavior = $flyBehaviorInterface;
    }

    public function setQuackBehavior(QuackBehaviorInterface $quackBehaviorInterface)
    {
        $this->quackBehavior = $quackBehaviorInterface;
    }
}
