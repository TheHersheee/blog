<?php

class Engine {
    private $speed = 0;

    public function accelerate() {
        $this->speed += 28;
    }

    public function getSpeed() {
        return $this->speed;
    }

    public function fullStop() {
        $this->speed = 0;
    }
}
