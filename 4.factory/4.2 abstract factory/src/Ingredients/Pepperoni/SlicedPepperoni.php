<?php

/**
 * phpcs:disable PSR1.Files.SideEffects
 */

declare(strict_types=1);

namespace Ingredients\Pepperoni;

use Ingredients\Pepperoni;

;

class SlicedPepperoni implements Pepperoni
{
    public function __construct()
    {
        echo "Sliced Pepperoni\n";
    }
}
