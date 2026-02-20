<?php

$a = 2;

$age = 50;

    switch ($a) {
        case 1:
            echo "To day Is Monday ";
            break;
        case 2:
            echo "To day Is Tuseday ";
            break;
            
        case 3:
            echo "To day Is Wensday ";
            break;
            
        case 4:
            echo "To day Is Thusday ";
            break;
            
        case 5:
            echo "To day Is friday ";
            break;
            
        case 6:
            echo "To day Is Seturday ";
            break;

        case 7:
            echo "To day Is sunday ";
            break;
        
        default:
            echo " Enter Valid Day's ";
            break;
    }

    // Swich case with Multipale Condiction..
/*
        switch ($age) {
        case ($age >=18 && $age<=65):
            echo "You are Drive A Car";
            break;
        case ($age<=18):
            echo "You are a Chlid";
            break;
        default:
            echo " You are Not Drive A Car ";
            break;
    }
*/
    
?>