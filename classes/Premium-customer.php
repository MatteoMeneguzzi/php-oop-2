<?php

 

// Premium Customer class

class Premium extends Customer {
    // Proprietà
    private $level;

    //  Costruttore
    function __construct($_name, $_lastname, $_level = 1) {
       parent::__construct($_name, $_lastname);
       $this->level = $_level;
    }

    // Metodi
    protected function getDiscount() {
        if ($this->age > 65) {
            $this->sale = 50;
        } elseif (is_numeric($this->age)) {
            $this->sale = $this->level * 10;
        } else {
            $this->sale = 0;
        }
    }
}