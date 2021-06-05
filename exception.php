<?php

class Customer {
    // proprietà
    private $age;

    // metodi
    public function setAge($_age) {
        if(is_numeric($_age) && $_age > 0 && $_age < 150 ) {
            $this->age = $_age;
        } else if(!is_numeric($_age)) {
            throw new Exception ($_age . ' is not a number.');
        } else {
            throw new Exception ($_age . ' is not a VALID number.');
        }
    }
}