<?php

    namespace App\Units;

    interface ArmyInterface 
    {
        public function setName($name);
        public function getName();
        public function setHealth($health);
        public function getHealth();
        public function setArmor($armor);
        public function getArmor();
        public function setDamage($damage);
        public function getDamage();
    }