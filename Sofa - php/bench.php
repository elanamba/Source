<?php
namespace Three;
require "sofa.php";

use Two\Sofa as Sofa;


class Bench extends Sofa{


    public function __construct($sirina,$visina,$dlabocina){
        parent::__construct($sirina,$visina,$dlabocina);
    }
}

echo "<hr>";
echo "3.";
$benchOne = new Bench(6,7,8);
$benchOne->setSedenje(true);
echo "Sedenje:" .$benchOne->getSedenje();
echo "<br>";
$benchOne->setSpienje(true);
echo "Spienje:" .$benchOne->getSpienje();
echo"<br>";
$benchOne->setSeats(4);
$benchOne->setArms(3);
$benchOne->setDepth_opened(2);
echo "Area: " . $benchOne->area();
echo "<br>";

if($benchOne->getSedenje()){
    echo "It has ". $sofa->getArms() . " armrests and " . $sofa->getSeats() . " seats.";
}