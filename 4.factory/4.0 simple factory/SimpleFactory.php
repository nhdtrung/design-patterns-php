<?php

/**
 * phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
 * phpcs:disable PSR1.Classes.ClassDeclaration.MultipleClasses
 * phpcs:disable PSR1.Files.SideEffects
 */

declare(strict_types=1);

require('Developer.php');

class SimpleFactory
{


    public function createDeveloper($type)
    {
        switch ($type) {
            case 'Php':
                $developer = new PhpDeveloper();

                break;
            case 'Ruby':
                $developer = new RubyDeveloper();

                break;
            case 'Android':
                $developer = new AndroidDeveloper();

                break;
            default:
                $developer = null;

                break;
        }

        return $developer;
    }
}
