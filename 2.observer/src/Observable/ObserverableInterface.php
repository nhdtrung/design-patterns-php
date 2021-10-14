<?php

declare(strict_types=1);

namespace HeadFirst\Observer\Observable;

use HeadFirst\Observer\Observers\ObserverInterface;

interface ObserverableInterface
{
    public function add(ObserverInterface $o);
    public function remove(ObserverInterface $o);
    public function notify();
}
