<?php


namespace App\Builder;


use App\Models\Car;

class CaroneBuilder implements CarBuilderInterface
{

    protected $car;

    public function start():Car
    {
        $this->car = new Car();
        return $this->car;
    }
    public function break():Car
    {
        $this->car = new Car();
        return $this->car;
    }
}
