<?php
require_once 'product.php';
require_once 'calculateprice.php';

class ProductKg extends Product implements CalculatePrice
{
    protected $numkg;

    public function __construct($name,$price, $numkg)
    { 
        parent::__construct($name,$price);
        $this->numkg=$numkg;
    }
    public function setNumkg($numkg)
    {
        $this->numkg=$numkg;
    }
    public function getNumkg()
    {
        return $this->numkg;
    }
    public function total()
    {
        return $this->getPrice() * $this->getNumkg();
    }
    public function printIT()
    {
        echo " Name:" .$this->name . ", price:" .$this->price . "amount:" .$this->numkg . "kg";
    }
 
}

