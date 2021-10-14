<?php

declare(strict_types=1);

namespace HeadFirst\Strategy;

require_once __DIR__ . './../vendor/autoload.php';

use HeadFirst\Strategy\FlyBehavior\FlyRocketPowered;
use HeadFirst\Strategy\QuackBehavior\Squeak;

$duck = new MallardDuck();
$duck->display();
$duck->performFly();
$duck->performQuack();

echo PHP_EOL;

$duck = new ModelDuck();
$duck->display();
$duck->performFly();
$duck->performQuack();
echo '----upgrade model duck with rocket Powered part.----' . PHP_EOL;
$duck->setFlyBehavior(new FlyRocketPowered());
$duck->performFly();
echo '----upgrade model duck with different sound part.----' . PHP_EOL;
$duck->setQuackBehavior(new Squeak());
$duck->performQuack();
