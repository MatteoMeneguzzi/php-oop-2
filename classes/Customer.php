<?php

/**
 * CUSTOMER CLASS
 */

 class Customer {
    // Proprietà
    protected $name;
    protected $lastname;
    protected $age;
    protected $sale;

     //  Costruttore
    function __construct($_name, $_lastname) {
        $this->name = $_name;
        $this->lastname = $_lastname;
     
    }

    // Metodi
    public function getFullName() {
        return $this->name . ' ' . $this->lastname;
    }

    public function setAge($_age) {
        if(is_numeric($_age) && $_age > 0 && $_age < 150 ) {
            $this->age = $_age;
        } else if(!is_numeric($_age)) {
            throw new Exception ($_age . ' is not a number.');
            $this->sale = 0;
        } else {
            throw new Exception ($_age . ' is not a VALID number.');
        }
    }

    public function getAge() {
        return $this->age;
    }
    
    protected function getDiscount() {

        $this->sale = $this->age > 65 || $this->age < 14 ? 20 : 0; 
    }

    public function getSale() {
       $this->getDiscount();
        
        return $this->sale;
    }
    
 }

