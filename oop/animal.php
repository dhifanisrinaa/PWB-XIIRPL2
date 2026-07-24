<?php
class Animal
{
  public string $name;
    public int $legs;
    public string $cold_blooded;

    public function __construct($name, $legs = 4, $cold_blooded = "no") 
    {
        $this->name = $name;
        $this->legs = $legs;
        $this->cold_blooded = $cold_blooded;
    }
}
?>