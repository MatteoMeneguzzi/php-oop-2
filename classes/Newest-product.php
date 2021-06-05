<?php

require_once __DIR__ . '/Product.php';

class Newest extends Product {
    // proprietà
    private $year;

    // costruttore
    function __construct($_type, $_quantity, $_year) {
       parent::__construct($_type, $_quantity);
       $this->year = $_year;
    }

    // Metodi

    protected function getYear() {
        $this->collection = $this->year > 2020 ? 'New' : '';
    }

    public function getCollection() {
       $this->getYear();
        
        return $this->collection;
    }
}