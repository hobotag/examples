<?php

class Car {

    public $color;
    public $brand;
    public $speed;
    public $fuel;
    public $price;
    public $doorsCount = 4;
    public $weight;
    
    const NUM1 = 2;
    const NUM2 = 5;
    const NUM3 = 12;

    public function __construct($color, $brand, $speed, $fuel, $price, $weight) {
       $this->color = $color; 
       $this->brand = $brand; 
       $this->speed = $speed; 
       $this->fuel = $fuel; 
       $this->price = $price; 
       $this->weight = $weight; 
    }

    public function fuelСonsumption($distance){
        
        return $distance / 100 * $this->fuel;
        
    }
    
    public static function getMaxConstant(){
        
        return max(self::NUM1, self::NUM2, self::NUM3);
        
    }
}

//$car1 = new Car;
//$car1->brand = 'Audi';
//$car1->speed = 110;
//$car1->fuel = 9;
//$car1->price = 80;
//$car1->color = 'Red';
//$car1->weight = 2.4;
//
//$car2 = new Car;
//$car2->brand = 'Porshe';
//$car2->speed = 150;
//$car2->fuel = 12;
//$car2->price = 130;
//$car2->color = 'Black';
//$car2->weight = 2.1;

$car3 = new Car('Green', 'Mercedes', 120, 10, 110,1.9);
$car4 = new Car('Yellow', 'Fiat', 100, 9, 90, 1.7);

echo '<pre>';
print_r($car3);
print_r($car4);

echo '<br>Car3 fuel consumption '.$car3->fuelСonsumption(500);
echo '<br>Car4 fuel consumption '.$car4->fuelСonsumption(500);

echo '<br>'.Car::NUM1;
echo '<br>'.Car::NUM2;
echo '<br>'.Car::NUM3;
echo '<br>'.Car::getMaxConstant();
