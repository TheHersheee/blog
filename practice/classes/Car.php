<?php

require_once('./Engine.php');

class Car {
    private $name;
    private $engine; // поля класса

    public function __construct($name) {
        $this->name = $name;
        $this->engine = new Engine();
    }

    public function getSpeed() {
        return $this->engine->getSpeed();
    }

    public function accelerate() {
        $this->engine->accelerate();
    }

    public function fullStop() {
        $this->engine->fullStop();
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }
}
