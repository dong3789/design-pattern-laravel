<?php

namespace App\Builder;
use App\Models\Car;

class CarBuilder
{
    public function make(CarBuilderInterface $car):Car
    {
        $car->start();
        $car->break();
        return $car;
    }



}

//Create a object of CarBuilder class
$carBuilder= new CarBuilder();
//Create car using builder which returns Car instance
$car= $carBuilder->make(new CaroneBuilder());
