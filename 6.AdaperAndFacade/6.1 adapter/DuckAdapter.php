<?php

class DuckAdapter implements Turkey {
    // Adaptee
    private $duck;

    public function __construct(Duck $duck){
        $this->duck = $duck;
    }
    public function gobble(){
        $this->duck->quack();
    }
    public function fly(){
        $this->duck->fly();
    }
}