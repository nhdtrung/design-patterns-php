<?php

declare(strict_types=1);

namespace Ingredients\Clams;

use Ingredients\Clams;

class FrozenClams implements Clams
{
    public function __construct()
    {
        echo "Frozen Clams\n";
    }
}
