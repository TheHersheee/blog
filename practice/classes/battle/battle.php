<?php

class Battle {
    private $health = 100;
    private $damage = 0;

    public function Punch() {
        $this->health -= rand(20, 80);
        if(rand(0,100) <= 10) {
            $this->health += 20;
            $this->damage += 10;
            print "Уворот и контрудар" . "\n";
        }
        if(rand(0,100) >= 90) {
            $this->health += 10;
            $this->damage += 0;
            print "Блок" . "\n";
        }
        if(rand(0,100) <= 5) {
            $this->health -= 80;
            print "Смертельный урон" . "\n";
        }
        if($this->health <= 0) {
            print "Поражение" . "\n";
        }
    }
    public function addDamage() {
        $this->damage += rand(0,50);
        if(rand(0,100) >= 95) {
            $this->damage += 100;
            print "Разъяренный удар" . "\n";
        }
        if($this->damage >= 100) {
            print "Победа" . "\n";
        }
    }
}

$boris = new Battle();
$boris->Punch();
$boris->addDamage();

var_dump($boris);