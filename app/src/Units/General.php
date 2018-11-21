<?php

namespace App\Units;

class General implements ArmyInterface
{
   public $name;
   public $health;
   public $armor;
   public $damage;
   public $strategy_skill;

   public function __construct(string $name = UnitEnum::GENERAL, int $health = 20, int $armor = 0, int $damage = 0)
   {
      $this->setName($name);
      $this->setHealth($health);
      $this->setArmor($armor);
      $this->setDamage($damage);
      $this->setStrategySkill(rand(1, 10));
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

   public function setStrategySkill($strategy_skill)
   {
      $this->strategy_skill = $strategy_skill;
   }

   public function getStrategySkill()
   {
      return $this->strategy_skill;
   }
}