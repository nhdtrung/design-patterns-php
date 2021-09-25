<?php

require_once  __DIR__ . './../vendor/autoload.php';

$nyStore = new NYPizzaStore();
$nyStore->orderPizza("cheese");

$chicagoStore = new ChicagoPizzaStore();
$chicagoStore->orderPizza("cheese");
