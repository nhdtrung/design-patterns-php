<?php

/**
 * phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
 * phpcs:disable PSR1.Files.SideEffects
 */

declare(strict_types=1);

class ChicagoPizzaStore extends PizzaStore
{
    /**
     * @throws Exception
     */
    protected function createPizza(string $type): Pizza
    {
        $pizzaIngredientFactory = new ChicagoPizzaIngredientFactory();
        switch ($type) {
            case 'cheese':
                $pizza = new CheesePizza($pizzaIngredientFactory);
                $pizza->setName("Chicago Style Deep Dish Cheese Pizza");

                break;
            default:
                throw new Exception("We dont have $type Pizza");
        }

        return $pizza;
    }
}
