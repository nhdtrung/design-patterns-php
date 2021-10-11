<?php

class MallardDuck implements Duck
{
    public function fly()
    {
        echo "Quack! " . PHP_EOL;
    }

    public function quack()
    {
        echo "I'm flying! " . PHP_EOL;
    }
}
