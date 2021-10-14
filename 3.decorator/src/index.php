<?php

declare(strict_types=1);

require_once __DIR__ . './../vendor/autoload.php';

use HeadFirst\Decorator\DarkRoast;
use HeadFirst\Decorator\Espresso;
use HeadFirst\Decorator\Milk;
use HeadFirst\Decorator\Mocha;

$espresso = new Espresso();
$espresso = new Milk($espresso);
echo $espresso->cost();

echo PHP_EOL;

$daskRoast = new DarkRoast();
$daskRoast = new Milk($daskRoast);
$daskRoast = new Mocha($daskRoast);
echo $daskRoast->cost();
