<?php

require_once './vendor/autoload.php';

$duck = new MallardDuck();

$turkey = new WildTurkey();

$i_can_be_a_duck = new TurkeyAdapter($turkey);

echo "The Turkey says.. \n";
$turkey->gobble();
$turkey->fly();

echo PHP_EOL;

echo "The Duck says.. \n";
$duck->quack();
$duck->fly();

echo PHP_EOL;

echo "The Turkey Adapter says..\n";
legitDuckTest($i_can_be_a_duck);

echo PHP_EOL;

function legitDuckTest(Duck $duck){
    $duck->quack();
    $duck->fly();
}
