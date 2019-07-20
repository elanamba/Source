<?php
require_once 'product.php';
require_once 'calculateprice.php';

class ProductBag extends Product implements CalculatePrice
{
    public function total()
    {
        return $this->getPrice();
    }

    public function printIt()
    {
        echo "Name:" .$this->name . ", price:" .$this->price ;
    }
}