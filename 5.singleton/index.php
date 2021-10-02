<?php

class Singleton {

    /**
     * @var Singleton
     */
    private static Singleton $instances;

    /**
     * The Singleton's constructor should always be private to prevent direct
     * construction calls with the `new` operator.
     */
    protected function __construct() {}

    /**
     * Singletons should not be restorable from strings.
     */
    public function __wakeup() {}

    /**
     * Singletons should not be cloneable.
     */
    public function __clone() {
        throw new BadMethodCallException("Clone is not allowed.");
    }

    /**
     * @return singleton
     */
    public static function getSingleton(): singleton
    {
        if (!self::$instances) {
		    echo ("creating a new instance") . PHP_EOL;
            self::$instances = new singleton();
        } else {
            echo ("this is previous instance") . PHP_EOL;
        }
        return self::$instances;
    }

    public function doSomething() {
        //@TODO: some logics
    }
}

$s1 = Singleton::getSingleton();
$s2 = Singleton::getSingleton();
if ($s1 === $s2) {
    echo "Singleton works, both variables contain the same instance.";
} else {
    echo "Singleton failed, variables contain different instances.";
}
