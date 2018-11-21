<?php

    namespace App\Units;

    class Battle implements BattleInterface
    {   
        public $damage1;
        public $damage2;
        public $health1;
        public $health2;
        public $army1;
        public $army2;

        public function __construct($army1, $army2) {
            $this->setArmy1($army1);
            $this->setArmy2($army2);

            $damage1 = 0;
            $damage2 = 0;
            $health1 = 0;
            $health2 = 0;
            $strategy_skill1 = 0;
            $strategy_skill2 = 0;
            
            foreach( $army1->arrayOfUnits as $army1 )
            {
                $damage1 += $army1->damage;
                $health1 += $army1->health;
                if( isset( $army1->strategy_skill ) )
                {
                    $strategy_skill1 += $army1->strategy_skill;
                }
            }
          

            foreach( $army2->arrayOfUnits as $army2 )
            {
                $damage2 += $army2->damage;
                $health2 += $army2->health;
                if( isset( $army2->strategy_skill ) )
                {
                    $strategy_skill2 += $army2->strategy_skill;
                }
            }

            $this->damage1 = $damage1 + $strategy_skill1 * 100;
            $this->damage2 = $damage2 + $strategy_skill2 * 100;
            $this->health1 = $health1;
            $this->health2 = $health2;

        }
        
        public function attack(string $atacker) {
            $armies = array( "ARMY 1", "ARMY 2" );

            $currentAttacker = $atacker;
            if( $currentAttacker === $armies[0] )
            {
                $this->health2 = $this->health2 - $this->damage1;
                echo "<p><span class='blue'>". $armies[0] . "</span> attacking</p>";
                if( $this->health2 >= 0 )
                {
                    echo "<p><span class='red'>".$armies[1] . "</span> now have ". $this->health2 ." health</p>";
                    $this->attack($armies[1]);
                }
                else
                {
                    echo "<p><span class='red'>". $armies[1] . "</span> lost all units</p>";
                    echo "<h2><span class='blue'>" . $armies[0] . "</span> won a battle!</h2>";
                    echo '<img class="airplane-top" src="static/images/Aircraft-blue.png" class="img-responsive" alt="Image">';
                    echo '<img class="airplane-middle" src="static/images/Aircraft-blue.png" class="img-responsive" alt="Image">';
                    echo '<img class="airplane-bottom" src="static/images/Aircraft-blue.png" class="img-responsive" alt="Image">';
                }
            }
            else
            {
                $this->health1 = $this->health1 - $this->damage2;
                echo "<p><span class='red'>". $armies[1] . "</span> attacking</p>";
                if( $this->health1 >= 0 )
                {
                    echo "<p><span class='blue'>" . $armies[0] . "</span> now have ". $this->health1 ." health</p>";
                    $this->attack($armies[0]);
                }
                else
                {   
                    echo "<p><span class='blue'>" . $armies[0] . "</span> lost all units.</p>";
                    echo "<h2><span class='red'>" . $armies[1] . "</span> won a battle!</h2>";
                    echo '<img class="airplane-top" src="static/images/Aircraft-red.png" class="img-responsive" alt="Image">';
                    echo '<img class="airplane-middle" src="static/images/Aircraft-red.png" class="img-responsive" alt="Image">';
                    echo '<img class="airplane-bottom" src="static/images/Aircraft-red.png" class="img-responsive" alt="Image">';
                }
                
                

                
                
            }

        }

        public function setArmy1(object $army) 
        {
            $this->army1 = $army;
        }
        public function setArmy2(object $army) 
        {
            $this->army2 = $army;
        }
    }