<?php

// Product Class

class Product {
    // Proprietà
    public $type;
    protected $quantity;
    protected $sale;

    //  Costruttore
    function __construct($_type, $_quantity) {
        $this->type = $_type;
        $this->quantity = $_quantity;
    }

    // Metodi
    protected function getDiscount() {
        if ($this->quantity >= 50 && $this->quantity < 100) {
            $this->sale = 10;
        } elseif ($this->quantity >= 100) {
            $this->sale = 20;
        } else {
            $this->sale = 0;
        }  
    }

    public function getSale() {
       $this->getDiscount();
        
        return $this->sale;
    }
}
