<?php

/**
 * phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
 */

declare(strict_types=1);

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
