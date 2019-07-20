<?php

namespace One;


class Furniture {
    public $sirina;
    public $visina;
    public $dlabocina ;

    protected $sedenje;
    protected $spienje;


    public function __construct($sirina, $visina, $dlabocina){
        $this->sirina =$sirina;
        $this->visina = $visina;
        $this->dlabocina =$dlabocina;
    }
    public function setSedenje($sedenje){
        $this->sedenje = $sedenje;
    }
    public function getSedenje(){
        return $this->sedenje;
    }
    public function setSpienje($spienje){
        $this->spienje = $spienje;
    }
    public function getSpienje(){
        return $this->spienje;
    }

     public function area(){
        $area = $this->sirina * $this->dlabocina;

    //   echo "Area:". $this->sirina * $this->dlabocina;
        return $area;
        
    }

    public function volume(){
        $volumen = $this->area() * $this->visina;

        //echo "Volumen:". $volumen;
        return $volumen;
    }
}

echo "1.";
$nesto = new Furniture(3, 5, 2);
echo "Sirina: " . $nesto->sirina;
echo "<br>";
echo "Visina: " . $nesto->visina;
echo "<br>";
echo "Dlabocina: " . $nesto->dlabocina;
echo "<br>";
echo "Area:" .$nesto->area();
echo "<br>";
echo "Volumen:" .$nesto->volume();
echo "<br>";
$nesto->setSpienje(true);
echo "Spienje:" .$nesto->getSpienje();
$nesto->setSedenje(false);
echo "<br>";
echo "Sedenje:" .$nesto->getSedenje();
echo "<hr>";

