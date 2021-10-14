<?php

declare(strict_types=1);

namespace Ingredients\Clams;

use Ingredients\Clams;

class FreshClams implements Clams
{
    public function __construct()
    {
        echo "Fresh Clams\n";
    }
}
