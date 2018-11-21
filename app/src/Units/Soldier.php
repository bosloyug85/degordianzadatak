<?php

namespace App\Units;

class Soldier implements ArmyInterface
{
   public $name;
   public $health;
   public $armor;
   public $damage;

   public function __construct(string $name = UnitEnum::SOLDIER, int $health = 20, int $armor = 50, int $damage = 20)
   {
      $this->setName($name);
      $this->setHealth($health);
      $this->setArmor($armor);
      $this->setDamage($damage);
   }

   public function setName($name)
   {
      $this->name = $name;
   }

   public function getName()
   {
      return $this->name;
   }

   public function setHealth($health)
   {
      $this->health = $health;
   }

   public function getHealth()
   {
      return $this->health;
   }

   public function setArmor($armor)
   {
      $this->armor = $armor;
   }

   public function getArmor()
   {
      return $this->armor;
   }

   public function setDamage($damage)
   {
      $this->damage = $damage;
   }

   public function getDamage()
   {
      return $this->damage;
   }
}