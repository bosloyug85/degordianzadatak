<?php

    namespace App\Units;

    interface BattleInterface
    {
        public function setArmy1(object $army);
        public function setArmy2(object $army);
        public function attack(string $attacker);
    }