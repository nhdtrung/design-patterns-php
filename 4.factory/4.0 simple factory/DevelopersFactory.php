<?php

/**
 * phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
 * phpcs:disable PSR1.Classes.ClassDeclaration.MultipleClasses
 * phpcs:disable PSR1.Files.SideEffects
 */

declare(strict_types=1);

require('SimpleFactory.php');

class DevelopersFactory
{
    /**
     * @var SimpleFactory
     */
    public $simpleFactory;

    public function __construct()
    {
        $this->simpleFactory = new SimpleFactory();
    }

    public function produceDeveloper($type)
    {
        $developer = $this->simpleFactory->createDeveloper($type);
        $developer->training();
        $developer->deliver();
        return $developer;
    }
}
