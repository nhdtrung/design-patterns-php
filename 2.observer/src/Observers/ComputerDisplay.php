<?php

namespace HeadFirst\Observer\Observers;

use HeadFirst\Observer\Observable\WeatherStation;
use HeadFirst\Observer\Observers\ObserverInterface;

class ComputerDisplay implements ObserverInterface {
    protected $weatherStation;

    public function __construct(WeatherStation $weatherStation)
    {
        $this->weatherStation = $weatherStation;
    }

    public function update()
    {
        echo 'this is computer screen:' . PHP_EOL;
        $this->weatherStation->getTemperature();
    }
}

