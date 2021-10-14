<?php

declare(strict_types=1);

namespace Ingredients\Cheese;

use Ingredients\Cheese;

class MozzarellaCheese implements Cheese
{
    public function __construct()
    {
        echo "Mozzarella Cheese \n";
    }
}
