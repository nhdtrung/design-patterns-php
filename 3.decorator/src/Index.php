<?php

require_once "./../vendor/autoload.php";

use HeadFirst\Decorator\Expresso;
use HeadFirst\Decorator\Milk;

$espresso = new Expresso();
$milk = new Milk($espresso);
echo $milk->cost();

