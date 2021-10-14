<?php

/**
 * phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
 */

declare(strict_types=1);

class TurkeyAdapter implements Duck
{
    private $turkey;

    public function __construct(Turkey $turkey)
    {
        $this->turkey = $turkey;
    }

    public function quack()
    {
        $this->turkey->gobble();
    }

    public function fly()
    {
        // Turkey can fly in short distance
        for ($i = 0; $i < 5; $i++) {
            $this->turkey->fly();
        }
    }
}
