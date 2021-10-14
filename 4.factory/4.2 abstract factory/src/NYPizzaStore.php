<?php

/**
 * phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
 * phpcs:disable PSR1.Files.SideEffects
 */

declare(strict_types=1);

class NYPizzaStore extends PizzaStore
{
    /**
     * @throws Exception
     */
    protected function createPizza(string $type): Pizza
    {
        $pizzaIngredientFactory = new NYPizzaIngredientFactory();
        switch ($type) {
            case 'cheese':
                $pizza = new CheesePizza($pizzaIngredientFactory);
                $pizza->setName("New York Style Cheese Pizza");

                break;
            default:
                throw new Exception("We dont have $type Pizza");
        }

        return $pizza;
    }
}
