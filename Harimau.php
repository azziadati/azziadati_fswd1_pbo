<?php
require_once 'Animal.php';

class Harimau extends Animal
{
    //overied
    function __construct($name, $gender)
    {
        $this->name = $name;
        $this->gender = $gender;

        
    }

    public function getinfo()
    {
        echo $this->name . 'Hewan ini adalah Harimau jenis karnivora';
    }
    
}

//Objek dari Class Animal
$harimau = new Harimau("Harimau ", "Karnivora");
echo $harimau->getinfo() . "\n";




