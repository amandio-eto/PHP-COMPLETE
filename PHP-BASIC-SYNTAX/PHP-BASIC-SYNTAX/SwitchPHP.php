<?php

/**
 * 
 * I use it for the right conditions
 */


 $finalexam = 75;

 switch($finalexam):
    case 99:
        echo "Exelent";
    break;
    case 80:
        echo "Verry Good";
    break;
    case 75: 
        echo "Good";
    break;
    case 60:
        echo "You Not Pass";
    break;

    default:
    echo "you haven't taken the Final exam";
    break;

 endswitch;