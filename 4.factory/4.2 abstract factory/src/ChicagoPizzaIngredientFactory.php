<?php

/**
 * phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
 */

declare(strict_types=1);

use Ingredients\Cheese;
use Ingredients\Cheese\MozzarellaCheese;
use Ingredients\Clams;
use Ingredients\Clams\FrozenClams;
use Ingredients\Dough;
use Ingredients\Dough\ThickCrustDough;
use Ingredients\Pepperoni;
use Ingredients\Pepperoni\SlicedPepperoni;
use Ingredients\Sauce;
use Ingredients\Sauce\PulmTomatoSauce;
use Ingredients\Veggies\BlackOlives;
use Ingredients\Veggies\EggPlant;
use Ingredients\Veggies\Spinach;

class ChicagoPizzaIngredientFactory implements PizzaIngredientFactory
{
    public function createDough(): Dough
    {
        return new ThickCrustDough();
    }

    public function createSauce(): Sauce
    {
        return new PulmTomatoSauce();
    }

    public function createCheese(): Cheese
    {
        return new MozzarellaCheese();
    }

    public function createVeggies(): array
    {
        return [new BlackOlives(), new Spinach(), new EggPlant()];
    }

    public function createPepperoni(): Pepperoni
    {
        return new SlicedPepperoni();
    }

    public function createClam(): Clams
    {
        return new FrozenClams();
    }
}
