<?php

namespace HeadFirst\Observer\Observable;

use HeadFirst\Observer\Observers\ObserverInterface;

interface ObserverableInterface {
    public function add(ObserverInterface $o);
    public function remove(ObserverInterface $o);
    public function notify();
}

