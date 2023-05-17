<?php
require_once 'Animal.php';

class Dog extends Animal
{
    //overied
    function __construct($name)
    {
        $this->name = $name;
        $this->gender = 'Anjing';

        
    }

    //Method
    public function getinfo()
    {
        echo $this->name . 'Hewan ini adalah Buddy jenis anjing. Anjing adalah hewan yang setia dan cerdas';
    }
}

//Objek dari Class Dog
$dog = new Dog("Buddy ");
echo $dog->getinfo() . "\n";
