<?php
require_once 'Animal.php';

class Cat extends Animal
{
    //overied
    function __construct($name)
    {
        $this->name = $name;
        $this->gender = 'Kucing';

        
    }

    //Method
    public function getinfo()
    {
        echo $this->name . 'Hewan ini adalah Kitty jenis kucing. Kucing adalah hewan yang suka bermain dan bersih.';
    
    }
}

//Objek dari Class Cat
$cat = new Cat("Kitty ");
echo $cat->getinfo() . "\n";
