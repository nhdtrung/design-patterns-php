<?php

declare(strict_types=1);

namespace HeadFirst\Observer\Observable;

use HeadFirst\Observer\Observers\ObserverInterface;

class WeatherStation implements ObserverableInterface
{
    protected $observerInterface = array();
    protected $temp;

    public function add(ObserverInterface $observerInterface)
    {
        $this->observerInterface[] = $observerInterface;
    }

    public function remove(ObserverInterface $observerInterface)
    {
        //Todo
    }

    public function notify()
    {
        foreach ($this->observerInterface as $observer) {
            $observer->update();
        }
    }

    public function setTemperature(int $temp)
    {
        $this->temp = $temp;
    }

    public function getTemperature()
    {
        echo <<<DOC
        today is {$this->temp} celcius"
        -------------------        
        DOC . PHP_EOL;
    }
}
