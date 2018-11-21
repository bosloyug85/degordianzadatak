<?php

namespace App\Units;

class Build
{
   public $unitsNumber;
   public $army;
   public $arrayOfUnits;
   public $unitName;

   public function __construct(int $unitsNumber)
   {
      $this->unitsNumber = $unitsNumber;
      $this->buildUnits($this->unitsNumber);
   }

   public function buildUnits(int $unitsNumber)
   {

      $arrayOfUnits = [];
      $buildCases = [UnitEnum::SOLDIER, UnitEnum::GENERAL, UnitEnum::TANK, UnitEnum::SUBMARINE, UnitEnum::AIRCRAFT, UnitEnum::BATTLESHIP];

      // battle logic there are always much more soldiers than other units
      for ($i = 0; $i < $unitsNumber; $i++) {
         $randomIndex = rand(1, 100);
         if (0 < $randomIndex && $randomIndex < 51) {
            $index = 0;
         }
         if (50 < $randomIndex && $randomIndex < 56) {
            $index = 1;
         }
         if (55 < $randomIndex && $randomIndex < 76) {
            $index = 2;
         }
         if (75 < $randomIndex && $randomIndex < 86) {
            $index = 3;
         }
         if (85 < $randomIndex && $randomIndex < 91) {
            $index = 4;
         }
         if (90 < $randomIndex && $randomIndex < 101) {
            $index = 5;
         }

         $case = 'App\Units\\' . $buildCases[$index];
         $unit = new $case;

         array_push($arrayOfUnits, $unit);
      }

      $this->arrayOfUnits = $arrayOfUnits;
    
   }

   public function countUnits($unitName)
   {
      $filtered_array = [];
      foreach ($this->arrayOfUnits as $unit) {
         if (isset($unit->name)) {
            if ($unit->name == $unitName) {
               $filtered_array[] = $unit;
            }
         }
      }
      return sizeof($filtered_array);
   }

   public function countDamage($unitName)
   {
      $filtered_array = [];
      foreach ($this->arrayOfUnits as $unit) {
         if (isset($unit->name)) {
            if ($unit->name == $unitName) {
               $filtered_array[] = $unit;
            }
         }
      }

      switch ($unitName) {
         case UnitEnum::SOLDIER:
            return 20 * sizeof($filtered_array);
            break;
         case UnitEnum::TANK:
            return 200 * sizeof($filtered_array);
            break;
         case UnitEnum::AIRCRAFT:
            return 400 * sizeof($filtered_array);
            break;
         case UnitEnum::BATTLESHIP:
            return 600 * sizeof($filtered_array);
            break;
         case UnitEnum::SUBMARINE:
            return 400 * sizeof($filtered_array);
            break;
      }
   }

   public function countStrategySkill()
   {
      $overallSkill = 0;
      foreach ($this->arrayOfUnits as $unit) {
         if (isset($unit->name)) {
            if ($unit->name == UnitEnum::GENERAL) {
               $overallSkill += $unit->strategy_skill;
            }
         }
      }

      return $overallSkill;
   }

   public function countOverallHealth()
   {
      $overallHealth = 0;
      foreach ($this->arrayOfUnits as $unit) {
         $overallHealth += $unit->getHealth();
      }
      return $overallHealth;
   }

   public function countOverallDamage()
   {
      $overallDamage = 0;
      foreach ($this->arrayOfUnits as $unit) {
         $overallDamage += $unit->getDamage();
      }
      return $overallDamage;
   }


}