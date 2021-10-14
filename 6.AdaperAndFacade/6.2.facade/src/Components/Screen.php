<?php

declare(strict_types=1);

namespace Components;

class Screen
{
    public function up()
    {
        echo "Screen is going up " . PHP_EOL;
    }

    public function down()
    {
        echo "Screen is going down " . PHP_EOL;
    }
}
