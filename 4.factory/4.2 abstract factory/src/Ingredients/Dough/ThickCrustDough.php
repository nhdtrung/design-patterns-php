<?php

declare(strict_types=1);

namespace Ingredients\Dough;

use Ingredients\Dough;

class ThickCrustDough implements Dough
{
    public function __construct()
    {
        echo "Thick Crust Dough\n";
    }
}
