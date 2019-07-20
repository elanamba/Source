<?php

namespace Four;

require "furniture.php";

use One\Furniture as Furn;

class Desk extends Furn {

    public function __construct($sirina,$visina,$dlabocina){
        parent::__construct($sirina,$visina,$dlabocina);
    }
}

echo "4.";
$desk = new Desk(2,2,2);
$desk->setSpienje(false);
echo "Spienje:" .$desk->getSpienje();
$desk->setSedenje(false);
echo "<br>";
echo "Sedenje:" .$desk->getSedenje();
echo "<br>";
echo "Area: " . $desk->area();

if($desk->getSedenje()){
    echo "It has ". $sofa->getArms() . " armrests and " . $sofa->getSeats() . " seats.";
}