<?php

class Stall
 {
    protected $code;
    protected $products = [];

    public function __construct($code){
        $this->code = $code;        
    }

    public function setCode($code)
    {
        $this->code = $code;
    }
    public function getCode()
    {
        return $this->code;
    }

    public function getProducts(){
        return $this->products;
    }

    public function addProducts(Product $product){
        array_push($this->products, $product);
    }
    public function printIt()
    {
            echo "Code is:" .$this->code . "and products is:"; 

            foreach ($this->products as $key =>$value){
                echo $value->printIt();
            }
            

    }
}

