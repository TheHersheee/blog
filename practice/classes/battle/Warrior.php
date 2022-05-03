<?php

class Warriors
{
    public function warriorName() {
        $name = [
            "Борис",
            "Таня",
            "Арсений",
            "Димас",
            "Максон"
        ];
        $countName = count($name) - 1;
        $nameIndex = rand(0, $countName);
        $warriorName = $name[$nameIndex];
        $winnerName = "$warriorName победил";
    }
}
