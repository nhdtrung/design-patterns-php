<?php

declare(strict_types=1);

namespace Ingredients\Dough;

use Ingredients\Dough;

class ThinCrustDough implements Dough
{
    public function __construct()
    {
        echo "Thin Crust Dough\n";
    }
}
