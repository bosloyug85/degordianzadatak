<?php
    use App\Units\UnitEnum;
?>
<div class="wrapper container">
    <div class="inner">
            <h3 class="title red red-panel">
                <img class="flag" src="static/images/soviets.jpg" alt="allies" /> 
                <?php echo "ARMY 2"; ?>
            </h3>
            <p title="Health: 20, Armor: 0, Damage: 0">
                <img src="static/images/General.svg" class="icon" alt="general" /> 
                <?php echo "Generals: ". $army2->countUnits(UnitEnum::GENERAL); ?>
            </p>
            <p title="Health: 20, Armor: 50, Damage: 20">
                <img src="static/images/Soldier.png" class="icon" alt="soldier" /> 
                <?php echo "Soldiers: ". $army2->countUnits(UnitEnum::SOLDIER); ?>
            </p>
            <p title="Health: 2000, Armor: 1000, Damage: 200">
                <img src="static/images/Tank.png" class="icon" alt="tank" /> 
                <?php echo "Tanks: ". $army2->countUnits(UnitEnum::TANK); ?>
            </p>
            <p title="Health: 1000, Armor: 600, Damage: 400">
                <img src="static/images/Aircraft.png" class="icon" alt="aircraft" /> 
                <?php echo "Aircrafts: ". $army2->countUnits(UnitEnum::AIRCRAFT); ?>
            </p>
            <p title="Health: 2000, Armor: 2000, Damage: 400">
                <img src="static/images/Submarine.png" class="icon" alt="submarine" /> 
                <?php echo "Submarines: ". $army2->countUnits(UnitEnum::SUBMARINE); ?>
            </p>
            <p title="Health: 800, Armor: 750, Damage: 600">
                <img src="static/images/Battleship.png" class="icon" alt="battleship" /> 
                <?php echo "Battleships: ". $army2->countUnits(UnitEnum::BATTLESHIP); ?>
            </p>
            <h4>
                <img src="static/images/health.png" class="icon" /> Health: <?php echo number_format($overallHealth2, 0, '', '.') ?>
            </h4>
            <h4>
                <img src="static/images/attack.png" class="icon" /> Units Damage: <?php echo number_format($army2->countOverallDamage(), 0, '', '.') . " + Bonus " . number_format($strategySkill2*100, 0, '', '.') . " = " . number_format($totalDamage2, 0, '', '.') ?>
            </h4>
    </div>
</div>