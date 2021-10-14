<?php

declare(strict_types=1);

namespace HeadFirst\Observer\Observers;

use HeadFirst\Observer\Observable\WeatherStation;
use HeadFirst\Observer\Observers\ObserverInterface;

class PhoneDisplay implements ObserverInterface
{
    protected $weatherStation;

    public function __construct(WeatherStation $weatherStation)
    {
        $this->weatherStation = $weatherStation;
    }

    public function update()
    {
        echo 'this is phone screen:' . PHP_EOL;
        $this->weatherStation->getTemperature();
    }
}
