<?php

interface Vehicle
{
    public function start();

    public function stop();
}

abstract class Car
{
    public function __construct(protected int $tankCapacity) {
    }
    
    abstract function getKmOnFullTank();
}

class Audi extends Car implements Vehicle
{
    public function getKmOnFullTank()
    {
        return $this->tankCapacity * 20;
    }

    public function start()
    {
        echo "Audi has started\n";
    }

    public function stop()
    {
        echo "Audi has stopped\n";
    }
}

class Fiat extends Car implements Vehicle
{
    public function getKmOnFullTank()
    {
        return $this->tankCapacity * 18;
    }

    public function start()
    {
        echo "Fiat has started\n";
    }

    public function stop()
    {
        echo "Fiat has stopped\n";
    }
}

class ElectricScooter implements Vehicle
{
    public function start()
    {
        echo "Scooter has started\n";
    }

    public function stop()
    {
        echo "Scooter has stopped\n";
    }
} 

