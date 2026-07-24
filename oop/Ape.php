<?php

require_once "Animal.php";

class Ape extends Animal 
{
    public function __construct($name) 
    {
        // Memanggil constructor milik Animal dengan legs = 2
        parent::__construct($name, 2, "no");
    }

    public function yell() 
    {
        echo "Auooo";
    }
}

?>
