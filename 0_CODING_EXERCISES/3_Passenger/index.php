<?php

class Passenger {
    private $name = "Fabio";
    private $age = 30;
    private $seatNumber = "A12";


    public function getName() {
        return $this->name;
    }

   public function getAge() {
    return $this->age;
   }

   public function getseatNumber() {
    return $this->seatNumber;
   }

   public function setseatNumber($seatNumber) {

    $this->seatNumber = $seatNumber;

   }
}


$passageiro1 = new Passenger;

echo $passageiro1->getName();
echo "<br>";
echo $passageiro1->getseatNumber();
