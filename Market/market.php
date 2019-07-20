<?php
require 'stall.php';
class Market
{
    protected $stalls = [];

    public function __construct($stalls){

    }

    public function setStalls($stalls){
        $this->stall = $stalls;
    }
    public function getStalls(){
        return $stalls;
    }

    public function addStall(Stall $stall){
        array_push($this->stalls, $stall);
    }
}

