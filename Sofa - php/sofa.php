<?php
namespace Two;

require 'furniture.php';

use One\Furniture as Furniture;

class Sofa extends Furniture {
    protected $seats;
    protected $arms;
    protected $depth_opened;

    public function __construct($sirina,$visina,$dlabocina){
        parent::__construct($sirina,$visina,$dlabocina);
    }

    public function setSeats($seats){
        $this->seats=$seats;
    }
    public function getSeats(){
        return $this->seats;
    }
    public function setArms($arms){
        $this->arms=$arms;
    }
    public function getArms(){
        return $this->arms;
    }
    public function setDepth_opened($depth_opened){
        $this->depth_opened = $depth_opened;
    }
    public function getDepth_opened(){
        return $this->depth_opened;
    }

    public function area_opened(){
        if($this->getSpienje()){
           return $this->sirina * $this->getDepth_opened();
         } else {
           return $this->area();   
         }
    }
}

echo"2.";

$sofa = new Sofa (4,5,6);
$sofa->setArms(3);
$sofa->setSeats(4);
$sofa->setDepth_opened(2);
$sofa->setSedenje(true);
$sofa->setSpienje(false);
echo "<br>";

if($sofa->getSedenje()){
    echo "It has ". $sofa->getArms() . " armrests and " . $sofa->getSeats() . " seats.";
}

echo "<br>";
echo "Area: " . $sofa->area();
echo "<br>";
echo "Volume: " . $sofa->volume();
echo "<br>";
echo "Area opened: " . $sofa->area_opened();
$sofa->setSpienje(true);
$sofa->setSedenje(false);
$sofa->setDepth_opened(4);
echo "<br>";
echo "Area opened: " . $sofa->area_opened();
