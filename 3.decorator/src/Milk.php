<?php

namespace HeadFirst\Decorator;

class Milk extends Beverage
{
	protected $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }
	
	public function getDescription() {
		// return $this->beverage->getDescription() . ", Soy";
	}
	
    public function cost(): float
    {
        return $this->beverage->cost() + 5;
    }
}
