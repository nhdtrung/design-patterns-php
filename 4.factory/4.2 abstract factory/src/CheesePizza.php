<?php

class CheesePizza extends Pizza
{
    /** @var PizzaIngredientFactory */
    private PizzaIngredientFactory $ingredientFactory;

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
