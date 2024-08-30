<?php

// without class
$basket = array(
    'banana' => [6, 1],
    'apples' => [3, 1.5],
    'bottles' => [2, 10]
);
function calculate($array)
{
    $total = 0;
    foreach ($array as $each) {
        $sum = $each[0] *  $each[1];
        $total += $sum;
    }

    return $total;
}
// echo "total: " . calculate($basket);

// with class
class Item
{
    private $name;
    private $amount;
    private $price;

    public function __construct($name, $amount, $price)
    {
        $this->name = $name;
        $this->amount = $amount;
        $this->price = $price;
    }

    public function calcuate()
    {
        return  $this->amount * $this->price;
    }
    public function displayinfo()
    {
        return "Item : " . $this->name . " amount: " . $this->amount . " price: " . $this->price;
    }
}

$item1 = new Item('Banana', 6, 1);
$item2 = new Item('apples', 3, 1.5);
$item3 = new Item('bottles', 2, 10);

$total = 0;

$total += $item1->calcuate();
$total += $item2->calcuate();
$total += $item3->calcuate();

echo $item1->displayinfo() . "<br>";
echo $item2->displayinfo() . "<br>";
echo $item3->displayinfo() . "<br>";

echo "total is : " . $total;
