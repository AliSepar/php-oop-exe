<?php

declare(strict_types=1);

/* EXERCISE 5

Copy the class of exercise 1.

TODO: Change the properties to private.
TODO: Fix the errors without using getter and setter functions.
TODO: Change the price to 3.5 euro and print it also on the screen on a new line.
*/


class Beverage
{
    private  $color;
    private  $price;
    private $temperature;

    public function __construct($color, $price, $temperature = "cold")
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    //getter function for the property/veriable
    // public function getTemperature()
    // {
    //     return $this->temperature;
    // }

    public function getInfo()
    {
        return "This beverage is " . $this->temperature . " and " . $this->color . " with a price of " . $this->price . ".";
    }
}

$cola = new Beverage('black', '3.5 euro');
echo $cola->getInfo() . '<br>';
