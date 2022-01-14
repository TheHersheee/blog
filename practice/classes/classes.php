<?php

class Car {
    private $name;
    private $speed;

    public function __construct($name, $speed) {
        $this->name = $name;
        $this->setSpeed($speed);
    }

    public function getSpeed() {
        return $this->speed;
    }

    public function accelerate() {
        $currentSpeed = $this->getSpeed();
        $newSpeed = $currentSpeed + 10;
        $this->setSpeed($newSpeed);
    }

    public function fullStop() {
        $this->setSpeed(0);
    }

    private function setSpeed($speed) {
        $this->speed = $speed;
        if ($this->speed >= 125) {
            $this->speed = 125;
        }
        if ($this->speed <= 0) {
            $this->speed = 0;
        }
    }
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }
}

$lada = new Car("Persik", 35);
$bmw = new Car("Lastochka", 84);