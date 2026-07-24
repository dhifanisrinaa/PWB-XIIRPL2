<?php
// Bentuk fungsi
require ('animal.php');

// Bentuk statement
require 'animal.php';

$sheep = new Animal("shaun");

echo $sheep->name; // "shaun"
echo $sheep->legs; // 4
echo $sheep->cold_blooded; // "no"

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())
?>