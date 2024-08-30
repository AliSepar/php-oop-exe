<?php

declare(strict_types=1);

/* EXERCISE 7

Copy your solution from exercise 6

TODO: Make a static property in the Beverage class that can only be accessed from inside the class called address which has the value "Melkmarkt 9, 2000 Antwerpen".
TODO: Print the address without creating a new instant of the beverage class 2 times in two different ways.

Use typehinting everywhere!
*/


class Beverage
{
    private  $color;
    private  $price;
    private $temperature;
    public const barname = "Het Vervolg";
    public static $address = 'Melkmarkt 9, 2000 Antwerpen';

    public function __construct($color, $price, $temperature = "cold")
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }
    public function getColor()
    {
        return $this->color;
    }
    //getter function for the property/veriable
    public function getTemperature()
    {
        return $this->temperature;
    }

    public function getInfo()
    {
        return "This beverage is " . $this->temperature . " and " . $this->color;
    }
}
class Beer extends Beverage
{
    private $name;
    private $alcoholPercentage;
    public const BARNAME = "Het Vervolg";

    public function __construct($color, $price, $temperature, $name, $alcoholPercentage)
    {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcoholPercentage()
    {
        return $this->alcoholPercentage;
    }
}


$Duvel = new Beer('blond', '3.5 euro', 'cold', 'Duvel', '8,5%');

echo $Duvel->getAlcoholPercentage() . "<br>";
echo $Duvel->getColor() . "<br>";
echo $Duvel->getInfo() . "<br>";
echo $Duvel::BARNAME . "<br>";

echo $Duvel->address;
echo Beverage::$address . "<br>";
