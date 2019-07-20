<?php

require_once 'productkg.php';
require_once 'productbag.php';
require_once 'stall.php';

$orange = new ProductKg("Orange",35,4);
$walnut = new ProductKg("Walnut",850,4);
$rasbarry = new ProductKg("Rasbarry",555,3);


$potato = new ProductBag("Potato",240);
$kiwi= new ProductBag("Kiwi",670);
$pepper = new ProductBag("Pepper",330);

$stall = new Stall("kod1");
$stall->addProducts($orange);
$stall->addProducts($kiwi);
$stall->addProducts($rasbarry);

$stall1 = new Stall("kod2");

$stall1->addProducts($walnut);
$stall1->addProducts($potato);
$stall1->addProducts($pepper);


//foreach($stall->getProducts() as  $key => $produktStalaza){
//    echo "ima go sledniov produkt: " . $produktStalaza->getName();
//    echo "<br>";
//}

foreach($stall->getProducts() as $key=>$prostall){
    echo $prostall->printIt();
}

$kos_arr = array( 
                array("produkt"=>$potato, "kolicina"=>3),
                array("produkt"=>$walnut, "kolicina"=>8),
                array("produkt"=>$pepper, "kolicina"=>2)
                );
$suma = 0;
foreach ($kos_arr as $key=> $prod ){
    echo "<br>";
    echo "Produkt: " . $prod["produkt"]->getName();
    echo "<br>";
    echo "Cena: " . $prod["produkt"]->getPrice();
    echo "<br>";
    if($prod["produkt"] instanceof ProductKg){
        echo "Number of kg: " . $prod["produkt"]->getNumkg();
        echo "<br>";
    }
    
    echo "Kolicina: " . $prod["kolicina"];
    echo "<br>";



     $suma += $prod["produkt"]->total() * $prod["kolicina"];
 }

echo "Sumata e : " . $suma;
echo "<br>";

$stall->printIt(); //test
echo "<br>";
$stall1->printIt();//test