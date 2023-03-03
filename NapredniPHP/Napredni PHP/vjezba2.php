<?php
class Car {
    public function __construct(public int $chassisNumber, public string $model, public string $manufacturer) {
       echo "Chassis number is: {$this->chassisNumber}\n";
       echo "Model is: {$this->model}\n";
       echo "Munfacturer is: {$this->manufacturer}\n";
    }

    public function __destruct(){
        echo "Car with chassis number: {$this->chassisNumber} is taken to recycling center\n";
    }

}

$car = new Car(00012121212,'Hyundai','i30');