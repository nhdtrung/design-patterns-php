<?php

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
