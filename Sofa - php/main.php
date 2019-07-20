<?php
require "furniture.php";
require "sofa.php";
require 'bench.php';
require 'desk.php';
//tuka sakam se da mi pecati ama gresam nekade // 

echo "1.";

echo "Sirina: " . $nesto->sirina;
echo "<br>";
echo "Visina: " . $nesto->visina;
echo "<br>";
echo "Dlabocina: " . $nesto->dlabocina;
echo "<br>";
echo $nesto->area();
echo "<br>";
echo $nesto->volume();
echo "<br>";
$nesto->setSpienje("Yes");
echo $nesto->getSpienje();
$nesto->setSedenje("No");
echo "<br>";
echo $nesto->getSedenje();
echo "<hr>";
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
echo "<hr>";
echo "3.";
$benchOne = new Bench(6,7,8);
$benchOne->setSedenje(true);
$benchOne->setSpienje(true);
$benchOne->setSeats(4);
$benchOne->setArms(3);
$benchOne->setDepth_opened(2);
echo "Area: " . $benchOne->area();

if($benchOne->getSedenje()){
    echo "It has ". $sofa->getArms() . " armrests and " . $sofa->getSeats() . " seats.";
}
echo "<hr>";
echo "4.";
$desk = new Desk(2,2,2);
$desk->setSpienje(true);
echo $desk->getSpienje();
$desk->setSedenje(false);
echo "<br>";
echo $desk->getSedenje();
echo "<br>";
echo "Area: " . $desk->area();

if($desk->getSedenje()){
    echo "It has ". $sofa->getArms() . " armrests and " . $sofa->getSeats() . " seats.";
}