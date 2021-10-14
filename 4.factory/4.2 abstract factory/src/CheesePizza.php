<?php

/**
 * phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
 */

declare(strict_types=1);

class CheesePizza extends Pizza
{
    /** @var PizzaIngredientFactory */
    private $ingredientFactory;

    /**
     * constructor
     *
     * @param $ingredientFactory
     */
    public function __construct($ingredientFactory)
    {
        $this->ingredientFactory = $ingredientFactory;
    }

    public function prepare()
    {
        echo "Preparing $this->name" . PHP_EOL;
        $this->dough = $this->ingredientFactory->createDough();
        $this->sauce = $this->ingredientFactory->createSauce();
        $this->cheese = $this->ingredientFactory->createCheese();
    }
}
