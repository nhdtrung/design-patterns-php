<?php

require_once './vendor/autoload.php';

use HeadFirst\Observer\Observable\WeatherStation;
use HeadFirst\Observer\Observers\ComputerDisplay;
use HeadFirst\Observer\Observers\PhoneDisplay;

$weatherStation = new WeatherStation();

$phoneDisplay = new PhoneDisplay($weatherStation);
$weatherStation->add($phoneDisplay);

$computerDisplay = new ComputerDisplay($weatherStation);
$weatherStation->add($computerDisplay);

// Then when weather call notify, both computer and phone screen get temp
$weatherStation->setTemperature(37);
$weatherStation->notify();

$weatherStation->setTemperature(-10);
$weatherStation->notify();

