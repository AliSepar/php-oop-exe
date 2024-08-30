<?php

declare(strict_types=1);

/* EXERCISE 6

Copy the classes of exercise 2.

TODO: Change the properties to private.
TODO: Make a const barname with the value 'Het Vervolg'.
TODO: Print the constant on the screen.
TODO: Create a function in beverage and use the constant.
TODO: Do the same in the beer class.
TODO: Print the output of these functions on the screen.
TODO: Make sure that every print is on a new line.

Use typehinting everywhere!
*/
class Beverage
{
    private  $color;
    private  $price;
    private $temperature;
    public const barname = "Het Vervolg";

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
echo $Duvel::BARNAME;
