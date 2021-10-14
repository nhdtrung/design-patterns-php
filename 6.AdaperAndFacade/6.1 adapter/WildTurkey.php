<?php

/**
 * phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
 */

declare(strict_types=1);

class WildTurkey implements Turkey
{
    public function gobble()
    {
        echo "Gobble gobble " . PHP_EOL;
    }

    public function fly()
    {
        echo "Short distance but I'm flying " . PHP_EOL;
    }
}
