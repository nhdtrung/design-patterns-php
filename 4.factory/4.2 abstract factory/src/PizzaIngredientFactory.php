<?php

/**
 * phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
 */

declare(strict_types=1);

use Ingredients\Cheese;
use Ingredients\Clams;
use Ingredients\Dough;
use Ingredients\Pepperoni;
use Ingredients\Sauce;

/**
 * abstract factory
 */
interface PizzaIngredientFactory
{
    //set of related products
    public function createDough(): Dough;
    public function createSauce(): Sauce;
    public function createCheese(): Cheese;
    public function createVeggies(): array;
    public function createPepperoni(): Pepperoni;
    public function createClam(): Clams;
}
