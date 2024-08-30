<?php

declare(strict_types=1);

/* EXERCISE 4

Copy the code of exercise 3 to here and delete everything related to cola.

TODO: Make all properties protected.
TODO: Make all the other prints work without error without changing the beverage class.
TODO: Don't call getters in de child class.

USE TYPEHINTING EVERYWHERE!
*/


class Beverage
{
    protected $color;
    protected $price;
    protected $temperature;

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

    // Setter for color
    public function setColor($color)
    {
        $this->color = $color;
    }

    // Getter for price
    public function getPrice()
    {
        return $this->price;
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
    public function getName()
    {
        return $this->name;
    }

    // Private method beerInfo
    private function beerInfo()
    {
        return "Hi, I'm " . $this->name . " and have an alcohol percentage of " . $this->alcoholPercentage . " and I have a " . $this->color . " color.";
    }

    // Public method to print beer info
    public function printBeerInfo()
    {
        echo $this->beerInfo();
    }
}


$Duvel = new Beer('blond', '3.5 euro', 'cold', 'Duvel', '8.5%');

echo $Duvel->getAlcoholPercentage() . "<br>";
echo $Duvel->getColor() . "<br>";
echo $Duvel->getInfo() . "<br>";
$Duvel->setColor('light');
echo $Duvel->getColor() . "<br>";

$Duvel->printBeerInfo();
