<?php

   
    require 'vendor/autoload.php';
    
    use App\Units\Battle;
    use App\Units\Build;

    // get units number
    if( isset($_GET['army1']) && isset($_GET['army2']) )
    {
        if( !filter_input(INPUT_GET, 'army1', FILTER_SANITIZE_NUMBER_INT) || !filter_input(INPUT_GET, 'army2', FILTER_SANITIZE_NUMBER_INT) )
        {
            echo "Please define number of units for army1 and army2.(must be integer)";
            die;
        }
        else 
        {
            $armyNumber1 = $_GET['army1'];
            $armyNumber2 = $_GET['army2'];
        }
    }
    else
    {
        echo "You must define army1 and army2";
        die;
    }
    
    // build random array of units
    $army1 = new Build($armyNumber1);
    $army2 = new Build($armyNumber2);

    $strategySkill1 = $army1->countStrategySkill();
    $strategySkill2 = $army2->countStrategySkill();

    $overallHealth1 = $army1->countOverallHealth();
    $overallHealth2 = $army2->countOverallHealth();

    // bonus damage for generals strategy skill
    $totalDamage1 = $army1->countOverallDamage() + $strategySkill1 * 100;
    $totalDamage2 = $army2->countOverallDamage() + $strategySkill2 * 100;

    // generate random battle
    $battle = new Battle($army1, $army2);
    
    //echo $army1->countOverallHealth();
    $armies = array( "ARMY 1", "ARMY 2" );

    require('views/header.php');
    require('views/body_partials/army_panel1.php');
    require('views/body_partials/army_panel2.php');
    require('views/body_partials/battle_status.php');
    require('views/footer.php');
?>






    
    