<?php

declare(strict_types=1);

namespace Components;

class TheaterLights
{
    public function dim(int $value)
    {
        echo "Theater Lights are dimmed to $value%" . PHP_EOL;
    }

    public function on()
    {
        echo "Theater Lights on " . PHP_EOL;
    }
}
