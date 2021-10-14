<?php

declare(strict_types=1);

namespace Ingredients\Cheese;

use Ingredients\Cheese;

class ReggianCheese implements Cheese
{
    public function __construct()
    {
        echo "Reggian Cheese \n";
    }
}
